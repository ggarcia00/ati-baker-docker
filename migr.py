import argparse
import pathlib
import shutil
import os
import docker
from rich.console import Console
from template import *
import re
import time

console = Console()

#Estilos
st_success = 'bold green'
st_error = 'bold red'


#Variaveis
baker_network = 'baker-network'
baker_directory = '/srv/docker/baker'
nginx_dir = baker_directory + '/nginx'



def Inicializa():
    # Inicializa os diretórios
    os.makedirs(os.path.join(baker_directory, 'nginx'))
    os.chown(os.path.join(baker_directory, 'nginx'), 101, 101)
    os.makedirs(os.path.join(baker_directory, 'sites'))
    os.chown(os.path.join(baker_directory, 'sites'), 82, 82)
    console.print("Diretorios criados", style=st_success)

    # Cria a network principal
    docker_cli.networks.create(baker_network)
    console.print("Network criada", style=st_success)

    # Builda as imagens
    console.print("Construindo imagens...", style='dim')
    docker_cli.images.build(path="./images/php-baker", rm=True, tag='baker:2.8.x', target="php56")
    docker_cli.images.build(path="./images/php-baker", rm=True, tag='baker:2.13.0', target="php81")
    docker_cli.images.build(path="./images/php-baker", rm=True, tag='nginx-baker', target="nginx-baker")

    console.print("Imagens criadas", style=st_success)

    # Cria conteiner principal nginx
    os.system(f"docker-compose -f ./conteiners/nginx/docker-compose.yml up -d")
    console.print("Container principal nginx criado", style=st_success)
    shutil.copytree(src='./nginx-files/', dst=nginx_dir, dirs_exist_ok=True)





def RemoverTudo():
    #Remove arquivos
    try:
        shutil.rmtree(baker_directory)
        console.print("Arquivos removidos", style=st_error)
    except:
        pass
    try:
        #Remove conteiner principal nginx
        os.system(f"docker-compose -f ./conteiners/nginx/docker-compose.yml down -v")
        console.print("Conteiner principal nginx removido", style=st_error)
    except:
        pass

    try:
        #Remove container site
        containers = docker_cli.containers.list()
        for c in containers:
            if c.name != 'teste-db_db_1':
                c.remove(force=True)
        console.print("Containers removidos", style=st_error)

    except:
        pass

    try:
        #Remove network
        docker_cli.networks.get(baker_network).remove()
        console.print("Network removida", style=st_error)
    except:
        pass
    try:
        #Remove imagens
        docker_cli.images.remove("baker:2.8.x")
        docker_cli.images.remove("baker:2.13.0")
        docker_cli.images.remove("nginx-baker")
        console.print("Imagens removidas", style=st_error)
    except:
        pass





def migrarSite(args):


    #Verfica se os parametros foram inseridos
    if( args.dir is not None ):
        if( not os.path.exists(args.dir) ):
            console.print("Diretorio do site nao encontrado", style=st_error)
            exit()
    else:
        console.print("Insira o diretorio atual do site (--dir)", style=st_error)
        exit()



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
                        network='baker-network', volumes=["{}/sites/{}:/var/www".format(baker_directory, slug)],
                        restart_policy={"Name": "always"})
        
        exit_code, output = docker_cli.containers.get(slug).exec_run("php pre-atualiza.php", workdir='/var/www')
        # console.print(output, style=st_error)
        
    except docker.errors.APIError:
        console.print("Erro ao criar container", style=st_error)
    

    gerarLocationTemplateNginx(slug_arg=slug, path="{}/location/{}.conf".format(nginx_dir, slug))
    gerarUpstreamTemplateNginx(slug_arg=slug, path="{}/upstream/{}.conf".format(nginx_dir, slug))
    docker_cli.containers.get("nginx-baker").exec_run("nginx -s reload")




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
    site_dir = os.path.join(baker_directory, "sites", slug)
    versao = buscaVersao(site_dir)
    if (versao == "2.8.1"):

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
    
        console.print("WebsiteBaker atualizado para a versão 2.8.3", style=st_success)

    if(versao == "2.8.3"):
        shutil.copytree("./cms-baker/2.13.0/", site_dir, dirs_exist_ok=True)
        os.system("chown -R 82.82 " + site_dir)

        old_baker = docker_cli.containers.get(slug)
        
        old_baker.rename(slug + "-old")

        novo_baker = docker_cli.containers.run("baker:2.13.0", detach=True, name=slug, 
                                        network='baker-network',
                                        volumes=["{}/sites/{}:/var/www".format(baker_directory, slug)],
                                        restart_policy={"Name" : "always"})

        old_baker.stop()
        old_baker.remove()
        docker_cli.containers.get("nginx-baker").exec_run("nginx -s reload")
        novo_baker.exec_run("php install/upgrade-script.php")
        time.sleep(1)
        novo_baker.exec_run("php install/upgrade-script.php")
        console.print("WebsiteBaker atualizado para a versão 2.13.0")

        



parser = argparse.ArgumentParser(description='Migração sites baker para docker')
parser.add_argument("cmd", type=str, help="Comando a ser executado")
parser.add_argument("--dir", type=pathlib.Path, help="Diretório onde os arquivos do site estão atualmente")
parser.add_argument("--slug", type=str, help="slug do site para remoção com o comando remove")#No momento o programa pede a versão, mas planejo buscar essa informação nos proprios arquivos do site e !APAGAR! essa linha
parser.add_argument("--project-version", type=str, help="Versão atual do projeto")
args = parser.parse_args()


try:
    docker_cli = docker.from_env()
except docker.errors.DockerException:
    console.print("Docker daemon não encontrado. Verifique se está rodando", style=st_error)
    exit()

if (args.cmd == 'init'):
    Inicializa()

if (args.cmd == 'explode'):
    RemoverTudo()

if (args.cmd == 'migrate'):
    migrarSite(args)

if (args.cmd == 'upgrade'):
    atualizaSite(args)

