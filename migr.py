import argparse
import pathlib
import shutil
import os
import docker
from rich.console import Console
from template import *
import labelfile
import re
import time
from packaging.version import parse as parse_version
import importlib


console = Console()

#Estilos
st_success = 'bold green'
st_error = 'bold red'


#Variaveis
baker_network = 'baker-network'
baker_directory = '/srv/docker/baker'
nginx_dir = baker_directory + '/nginx'

labels = labelfile.labels



def Inicializa():
    # Inicializa os diretórios
    os.makedirs(os.path.join(baker_directory, 'nginx'))
    os.makedirs(os.path.join(baker_directory, 'nginx', 'sites-available'))
    os.makedirs(os.path.join(baker_directory, 'nginx', 'sites-enabled'))
    os.chown(os.path.join(baker_directory, 'nginx'), 101, 101)
    os.chown(os.path.join(baker_directory, 'nginx', 'sites-available'), 101, 101)
    os.chown(os.path.join(baker_directory, 'nginx', 'sites-enabled'), 101, 101)
    os.makedirs(os.path.join(baker_directory, 'sites'))
    os.chown(os.path.join(baker_directory, 'sites'), 82, 82)
    console.print("Diretorios criados", style=st_success)

    # Cria a network principal
    try:
        docker_cli.networks.get(baker_network)
    except:
        docker_cli.networks.create(baker_network)
        console.print("Network criada", style=st_success)

    # Builda as imagens
    docker_cli.images.build(path="./images/php-baker", rm=True, tag='baker:2.8.x', target="php56")
    docker_cli.images.build(path="./images/php-baker", rm=True, tag='baker:2.13.0', target="php81")
    docker_cli.images.build(path="./images/php-baker", rm=True, tag='nginx-baker', target="nginx-baker")

    console.print("Imagens criadas", style=st_success)


    # Cria conteiner principal nginx
    shutil.copytree(src='./nginx-files/', dst=nginx_dir, dirs_exist_ok=True)

    docker_cli.containers.run('nginx-baker', name='nginx-baker', detach=True
                            , network=baker_network
                            , volumes={"{}/nginx".format(baker_directory) : {"bind" : '/etc/nginx', "mode" : "rw"},
                                       "{}/sites".format(baker_directory) : {"bind" : '/var/www', "mode" : "rw"}}
                            , labels=labels
                            , restart_policy={"Name": "always"}
                            )
    console.print("Container principal nginx criado", style=st_success)

    try:
        traefik_container = docker_cli.containers.get('traefik')
        docker_cli.networks.get(baker_network).connect(traefik_container)
        console.print("Adicionado container Traefik ja existente à network" + baker_network, style=st_success)
        
    except:
        os.makedirs("/srv/docker/traefik")
        shutil.copytree(src="./traefik", dst="/srv/docker/traefik", dirs_exist_ok=True)
        docker_cli.containers.run('traefik:v2.6', name='traefik', detach=True
                            , network=baker_network
                            , ports={'80/tcp' : '80', '443/tcp' : '443', '8080/tcp': '8080'}
                            , volumes={"/var/run/docker.sock" : {"bind" : "/var/run/docker.sock", "mode" : "rw"},
                                       "/srv/docker/traefik" : {"bind" : "/etc/traefik", "mode" : "rw"}}
                            , restart_policy={"Name": "always"}
                            )
        console.print("Container Traefik criado", style=st_success)






def migrarSite(args):


    #Verfica se os parametros foram inseridos
    if( args.dir is not None ):
        if( not os.path.exists(args.dir) ):
            console.print("Diretorio do site nao encontrado", style=st_error)
            exit()
    else:
        console.print("Insira o diretorio atual do site (--dir)", style=st_error)
        exit()
    
    if( args.server_name is None ):
        console.print("Use o parâmetro --server-name", style=st_error)
        exit()
    else:
        server_name = args.server_name




    slug = os.path.basename(args.dir)
    try:
        #copia arquivos do site
        shutil.copytree(src=args.dir, dst="{}/sites/{}".format(baker_directory, slug), ignore_dangling_symlinks=True, symlinks=True )
        #copia os arquivos novos (template, modulo separador)
        shutil.copytree(src="./template-baker/", dst="{}/sites/{}".format(baker_directory, slug), dirs_exist_ok=True)
        os.system("chown -R 82.82 " + baker_directory + '/sites/' + slug)

    except FileExistsError:
        console.print("{} já existe".format(baker_directory + "/sites/" + slug), style=st_error)
        exit()

    
    try:
        docker_cli.containers.run('baker:2.8.x' , detach=True, name=slug, 
                        network='baker-network', volumes={"{}/sites/{}".format(baker_directory, slug) : {'bind' : '/var/www' , 'mode' : 'rw'}},
                        restart_policy={"Name": "always"})
        
        _, output = docker_cli.containers.get(slug).exec_run("php pre-atualiza.php", workdir='/var/www')
        console.print(output.decode(), style=st_error)
        
    except docker.errors.APIError:
        console.print("Erro ao criar container", style=st_error)
    
    os.system('sed -i \'s/}}/, "traefik.http.routers.{}.rule" : "Host(`{}`)"\\n\}}/\' labelfile.py'.format(slug, server_name))

    docker_cli.containers.get("nginx-baker").stop()
    docker_cli.containers.get("nginx-baker").remove()

    gerarTemplateNginx(slug_arg=slug, path="{}/sites-available/{}.conf".format(nginx_dir, slug), server_name_arg=server_name)

    os.symlink(src="/etc/nginx/sites-available/{}.conf".format(slug), dst="{}/sites-enabled/{}.conf".format(nginx_dir, slug))

    importlib.reload(labelfile)
    labels = labelfile.labels

    docker_cli.containers.run('nginx-baker', name='nginx-baker', detach=True
                            , network=baker_network
                            , volumes={"{}/nginx".format(baker_directory) : {"bind" : '/etc/nginx', "mode" : "rw"},
                                       "{}/sites".format(baker_directory) : {"bind" : '/var/www', "mode" : "rw"}}
                            , labels=labels
                            , restart_policy={"Name": "always"}
                            )
    console.print("Site {} migrado com sucesso.".format(server_name), style=st_success)





def buscaVersao(dir):
    if(os.path.exists(os.path.join(dir, 'admin/interface/version.json'))):
        pattern = re.compile('VERSION":"(.*)","REVISION')
        file = open(os.path.join(dir, 'admin/interface/version.json'))
    else:
        pattern = re.compile('VERSION\', \'(.*)\'\);')
        file = open(os.path.join(dir, 'admin/interface/version.php'), "r")
    for line in file:
        match = pattern.search(line)
        if match:
            return match.group(1)
    return None
    



def atualizaSite(args):
    slug = args.slug
    if (args.slug is None):
        console.print("Especificar parametro --slug do site", style=st_error)
        exit()
    if (args.upgrade_to is None):
        console.print("Especificar parametro --upgrade-to para versão", style=st_error)
        exit()

    site_dir = os.path.join(baker_directory, "sites", slug)
    versao = buscaVersao(site_dir)
    if (parse_version(versao) == parse_version("2.8.1") and parse_version(args.upgrade_to) >= parse_version("2.8.3")): # Atualiza pra 2.8.3

        removedirs = ["/admin/preferences/details.php", "/admin/preferences/email.php", "/admin/preferences/password.php"
                    , "/modules/backup", "/modules/droplets/js", "/templates/argos_theme", "/templates/classic_theme", "/templates/wb_theme"
                    , "/config.php.new", "/install", "/config.php.new"]

        shutil.copytree("./cms-baker/2.8.3/", site_dir, dirs_exist_ok=True)
        os.system("chown -R 82.82 " + site_dir)

        for dir in removedirs:
            shutil.rmtree(site_dir + dir, ignore_errors=True)


        docker_cli.containers.get(slug).exec_run("php upgrade-script.php")
        os.remove(site_dir + '/upgrade-script.php')
        os.remove(site_dir + '/config.php.new')

        versao = "2.8.3"
        console.print("WebsiteBaker atualizado para a versão 2.8.3", style=st_success)
        

    if(parse_version(versao) == parse_version("2.8.3") and parse_version(args.upgrade_to) == parse_version("2.13.0")):
        shutil.copytree("./cms-baker/2.13.0/", site_dir, dirs_exist_ok=True)
        os.system("chown -R 82.82 " + site_dir)

        old_baker = docker_cli.containers.get(slug)
        
        old_baker.rename(slug + "-old")

        novo_baker = docker_cli.containers.run("baker:2.13.0", detach=True, name=slug, 
                                        network='baker-network',
                                        volumes={"{}/sites/{}".format(baker_directory, slug) : {'bind' : '/var/www' , 'mode' : 'rw'}},
                                        restart_policy={"Name" : "always"})

        old_baker.stop()
        old_baker.remove()
        docker_cli.containers.get("nginx-baker").exec_run("nginx -s reload")
        novo_baker.exec_run("php install/upgrade-script.php")
        time.sleep(1)
        novo_baker.exec_run("php install/upgrade-script.php")
        console.print("WebsiteBaker atualizado para a versão 2.13.0", style=st_success)

        


parser = argparse.ArgumentParser(description='Migração sites baker para docker')
parser.add_argument("cmd", type=str, help="Comando a ser executado")
parser.add_argument("--dir", type=pathlib.Path, help="Diretório onde os arquivos do site estão atualmente (Nome da pasta será o nome do container)")
parser.add_argument("--slug", type=str, help="slug do site para remoção com o comando remove")
parser.add_argument("--upgrade-to", type=str, help="Versão alvo da atualização: \"2.8.3\" ou \"2.13.0\"")
parser.add_argument("--server-name", type=str, help="Link do site")
args = parser.parse_args()


try:
    docker_cli = docker.from_env()
except docker.errors.DockerException:
    console.print("Docker daemon não encontrado. Verifique se está rodando", style=st_error)
    exit()

if (args.cmd == 'init'):
    Inicializa()

# if (args.cmd == 'explode'):
#     RemoverTudo()

if (args.cmd == 'migrate'):
    migrarSite(args)

if (args.cmd == 'upgrade'):
    atualizaSite(args)
