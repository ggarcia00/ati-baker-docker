# ati-baker-docker

## Como usar

### Instalar requisitos
```sh
$ pip install -r requirements.txt 
```
### Rodar na primeira vez

```sh
$ python3 migr.py init
```
### Migrar site
```sh
$ python3 migr.py migrate --dir [<path>]
```
### Atualizar site após migração
Versões suportadas, ```2.8.3```, ```2.13.0```
```sh
$ python3 migr.py upgrade --slug [<site>] --upgrade-to [<versao>]
```
