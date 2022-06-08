import argparse
from ntpath import join
import pathlib
import shutil
import os
import sys
import docker
from rich.console import Console
from template import *
import re
import time
from packaging.version import parse as parse_version


console = Console()

#Estilos
st_success = 'bold green'
st_error = 'bold red'


#Variaveis
baker_network = 'baker-network'
baker_directory = '/srv/docker/baker'

nginx_directory = baker_directory + '/nginx'
sites_directory = baker_directory + '/sites'




def Inicializa():
    # Inicializa os diretórios
    os.makedirs(nginx_directory, exist_ok=True)
    os.chown(nginx_directory, 82, 82)
    os.makedirs(sites_directory, exist_ok=True)
    os.chown(sites_directory, 82, 82)
    console.print("Diretorios inicializados", style=st_success)

    # Cria a network principal se não existe
    try:
        docker_cli.networks.get(baker_network)
    except:
        docker_cli.networks.create(baker_network)
        console.print("Network criada", style=st_success)

    # Builda as imagens
    console.print("Building images... (demora)", style='dim')
    docker_cli.images.build(path="./images/php-baker", rm=True, tag='baker:2.8.x', target="php56")
    docker_cli.images.build(path="./images/php-baker", rm=True, tag='baker:2.13.0', target="php81")

    console.print("Imagens criadas", style=st_success)

    # Verifica se container do Traefik existe e o adiciona a rede, senão, cria o container
    try:
        traefik_container = docker_cli.containers.get('traefik')
        docker_cli.networks.get(baker_network).connect(traefik_container)
        console.print("Adicionado container Traefik ja existente à network " + baker_network, style=st_success)
        
    except docker.errors.NotFound:
        os.makedirs("/srv/docker/traefik")
        shutil.copytree(src="./traefik", dst="/srv/docker/traefik", dirs_exist_ok=True)
        docker_cli.containers.run('traefik:v2.6', name='traefik', detach=True
                            , network=baker_network
                            , ports={'80/tcp' : '80', '443/tcp' : '443'}
                            , volumes={"/var/run/docker.sock" : {"bind" : "/var/run/docker.sock", "mode" : "ro"},
                                       "/srv/docker/traefik" : {"bind" : "/etc/traefik", "mode" : "rw"}}
                            , restart_policy={"Name": "always"}
                            )
        console.print("Container Traefik criado", style=st_success)






def migrarSite(args):


    #Verfica se os parametros foram inseridos
    if( args.dir is not None ):
        if( not os.path.exists(args.dir) ):
            console.print("Diretorio do site nao encontrado", style=st_error)
            sys.exit()
    else:
        console.print("Insira o diretorio atual do site (--dir)", style=st_error)
        sys.exit()




    slug = os.path.basename(args.dir)
    server_name, server_uri = buscaUrl(args.dir)

    if(server_uri is not None):
        containers_volume = '/var/www/{}'.format(server_uri)
        path_rule =  ' && PathPrefix(`/{}`)'.format(server_uri)
    else:
        containers_volume = '/var/www'
        path_rule = ""
        server_uri = ""

    novo_site_dir = os.path.join(baker_directory, 'sites', server_name, server_uri)

    try:
        os.makedirs(novo_site_dir)
        #copia arquivos do site
        shutil.copytree(src=args.dir, dst=novo_site_dir, ignore_dangling_symlinks=True, symlinks=True, dirs_exist_ok=True )
        #copia os arquivos novos (template, modulo separador)
        shutil.copytree(src="./template-baker/", dst=novo_site_dir, dirs_exist_ok=True)
        os.system("chown -R 82.82 " + novo_site_dir)

    except FileExistsError:
        console.print("{} já existe".format(novo_site_dir), style=st_error)
        sys.exit()

    os.makedirs(os.path.join(nginx_directory, slug))
    shutil.copytree(src="./nginx-files/", dst=os.path.join(nginx_directory, slug), dirs_exist_ok=True)
    os.mkdir(os.path.join(nginx_directory, slug, "conf.d"))
    os.system("chown -R 82.82 {}/{}".format(nginx_directory, slug))
    os.system("find {} -type d -print0 | xargs -0 chmod 755".format(novo_site_dir))
    os.system("find {} -type f -print0 | xargs -0 chmod 644".format(novo_site_dir))

    

    gerarTemplateNginx(slug_arg=slug, path=os.path.join(nginx_directory, slug, "conf.d", "main.conf"))





    try:
        docker_cli.containers.run('nginx:1.21.6-alpine', detach=True, name="baker-nginx-{}".format(slug),
                            network='baker-network', volumes={os.path.join(nginx_directory, slug) : {'bind' : '/etc/nginx', 'mode' : 'rw'}
                                                            , novo_site_dir : {'bind': containers_volume, 'mode' : 'rw'}},
                            labels={"traefik.enable" : "true", "traefik.http.routers.{}.rule".format(slug) : "Host(`{}`){}".format(server_name, path_rule),
                                    },
                            restart_policy={"Name" : "always"}
        
        )
    except docker.errors.APIError:
        console.print("Erro ao criar container", style=st_error)
        sys.exit(1)


    
    try:
        docker_cli.containers.run('baker:2.8.x' , detach=True, name='baker-{}'.format(slug), 
                        network='baker-network', volumes={novo_site_dir : {'bind' : containers_volume , 'mode' : 'rw'}},
                        restart_policy={"Name": "always"})
        

        _, output = docker_cli.containers.get('baker-' + slug).exec_run("php pre-atualiza.php", workdir=containers_volume)
        output = output.decode('utf-8')

        if(not output == ""):
            console.print("Erro ao executar o script pre-atualiza.php:\n" + output, style=st_error)
            sys.exit(1)
        
    except docker.errors.APIError:
        console.print("Erro ao criar container", style=st_error)
        sys.exit(1)


    console.print("Site {}/{} migrado com sucesso.".format(server_name, server_uri), style=st_success)





def buscaVersao(dir):
    if(os.path.exists(os.path.join(dir, 'admin/interface/version.json'))):
        pattern = re.compile('VERSION":"(.*)","REVISION')
        filepath = os.path.join(dir, 'admin/interface/version.json')
    else:
        pattern = re.compile('VERSION\', \'(.*)\'\);')
        filepath = os.path.join(dir, 'admin/interface/version.php')
    
    with open(filepath, "r") as file:
        for line in file:
            match = pattern.search(line)
            if match:
                return match.group(1)
    return None

def buscaUrl(dir):
    filepath = os.path.join(dir, "config.php")
    if(os.path.exists(filepath)):
        pattern = re.compile('\'http://(.*)\'')
        with open(filepath, "r", encoding="ISO-8859-1") as file:
            for line in file:
                match = pattern.search(line)
                if match:
                    server_uri = None
                    try:
                        server_name, server_uri = match.group(1).split('/', 1)
                    except:
                        server_name = match.group(1)
                    return server_name, server_uri
    return None
    



def atualizaSite(args):
    if (args.slug is None):
        console.print("Especificar parametro --slug do site", style=st_error)
        sys.exit()
    if (args.upgrade_to is None):
        console.print("Especificar parametro --upgrade-to para versão", style=st_error)
        sys.exit()
    
    slug = args.slug


    container = docker_cli.containers.get('baker-' + slug)
    container.reload()
    site_dir = container.attrs['Mounts'][0]['Source']
    container_vol = container.attrs['Mounts'][0]['Destination']


    versao = buscaVersao(site_dir)
    if (parse_version(versao) == parse_version("2.8.1") and parse_version(args.upgrade_to) >= parse_version("2.8.3")): # Atualiza pra 2.8.3

        removedirs = ["/admin/preferences/details.php", "/admin/preferences/email.php", "/admin/preferences/password.php"
                    , "/modules/backup", "/modules/droplets/js", "/templates/argos_theme", "/templates/classic_theme", "/templates/wb_theme"
                    ]

        for dir in removedirs:
            shutil.rmtree(site_dir + dir, ignore_errors=True)
            
        shutil.copytree("./cms-baker/2.8.3/", site_dir, dirs_exist_ok=True)
        os.system("chown -R 82.82 " + site_dir)
        os.system("find {} -type d -print0 | xargs -0 chmod 755".format(site_dir))
        os.system("find {} -type f -print0 | xargs -0 chmod 644".format(site_dir))


        container.exec_run("php upgrade-script.php", workdir=container_vol)
        os.remove(site_dir + '/upgrade-script.php')
        os.remove(site_dir + '/config.php.new')
        shutil.rmtree(site_dir + '/install')

        versao = "2.8.3"
        console.print("WebsiteBaker atualizado para a versão 2.8.3", style=st_success)
        

    if(parse_version(versao) == parse_version("2.8.3") and parse_version(args.upgrade_to) == parse_version("2.13.0")):
        shutil.copytree("./cms-baker/2.13.0/", site_dir, dirs_exist_ok=True)
        os.system("chown -R 82.82 " + site_dir)

        old_baker = docker_cli.containers.get('baker-' + slug)
        
        old_baker.rename('baker-' + slug + "-old")

        novo_baker = docker_cli.containers.run("baker:2.13.0", detach=True, name='baker-' + slug, 
                                        network='baker-network',
                                        volumes={site_dir : {'bind' : container_vol , 'mode' : 'rw'}},
                                        restart_policy={"Name" : "always"})

        old_baker.stop()
        old_baker.remove()
        docker_cli.containers.get("baker-nginx-" + slug).exec_run("nginx -s reload")
        novo_baker.exec_run("php install/upgrade-script.php", workdir=container_vol)
        time.sleep(1)
        novo_baker.exec_run("php install/upgrade-script.php", workdir=container_vol)
        console.print("WebsiteBaker atualizado para a versão 2.13.0", style=st_success)

        


parser = argparse.ArgumentParser(description='Migração sites baker para docker')
parser.add_argument("cmd", type=str, help="Comando a ser executado")
parser.add_argument("--dir", type=pathlib.Path, help="Diretório onde os arquivos do site estão atualmente (Nome da pasta será o nome do container)")
parser.add_argument("--slug", type=str, help="slug do site para remoção com o comando remove")
parser.add_argument("--upgrade-to", type=str, help="Versão alvo da atualização: \"2.8.3\" ou \"2.13.0\"")
args = parser.parse_args()


try:
    docker_cli = docker.from_env()
except docker.errors.DockerException:
    console.print("Docker daemon não encontrado. Verifique se está rodando", style=st_error)
    sys.exit()

if (args.cmd == 'init'):
    Inicializa()

if (args.cmd == 'migrate'):
    migrarSite(args)

if (args.cmd == 'upgrade'):
    atualizaSite(args)
