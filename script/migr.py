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


parser = argparse.ArgumentParser(description='Migração sites baker para docker')
parser.add_argument("cmd", type=str, help="Comando a ser executado")
parser.add_argument("--dir", type=pathlib.Path, help="Diretório onde os arquivos do site estão atualmente")
parser.add_argument("--slug", type=str, help="slug do site para remoção com o comando remove")#No momento o programa pede a versão, mas planejo buscar essa informação nos proprios arquivos do site e !APAGAR! essa linha
parser.add_argument("--project-version", type=str, help="Versão atual do projeto")
args = parser.parse_args()