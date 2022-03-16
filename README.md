# ati-baker-docker

## Como usar
### Rodar na primeira vez
```
python3 migr.py init
```
### Migrar site
```
python3 migr.py migrate --dir [<path>]
```
### Atualizar site após migração
Versões suportadas, ```2.8.3```, ```2.13.0```
```
python3 migr.py upgrade --slug [<site>] --upgrade-to [<versao>]
```