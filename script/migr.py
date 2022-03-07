import argparse
import pathlib
import shutil
import os
import docker
from rich.console import Console

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

    # Builda a imagem
    docker_cli.images.build(path="./Imagens", rm=True, tag='baker:2.8.x', target="php56")
    docker_cli.images.build(path="./Imagens", rm=True, tag='baker:2.13.x', target="php81")
    console.print("Imagens criadas", style=st_success)





def RemoverTudo():
    #Remove arquivos
    shutil.rmtree(baker_directory)
    console.print("Arquivos removidos", style=st_error)

    #Remove network
    docker_cli.networks.get(baker_network).remove()
    console.print("Network removida", style=st_error)

    #Remove imagens
    docker_cli.images.remove("baker:2.8.x")
    docker_cli.images.remove("baker:2.13.x")
    console.print("Imagens removidas", style=st_error)






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