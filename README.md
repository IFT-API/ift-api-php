# ift-api-php

Quelques exemples d'implémentation de l'API REST IFT en Php :

- /api/hello : test de disponibilité du serveur 
- /api/campagnes : récupération de la liste des campagnes
- /api/produits-doses-reference : recherche d'une dose de référence associée à un produit
- /api/ift/traitement : calcul d'un ift

## Pré-requis

Installer [Docker](https://docs.docker.com/install/)

## Lancer l'exemple

```sh
    docker build . -t ift-api-php
    docker run -d -p 80:80 --name ift-api-php-app -v "$PWD/src":/var/www/html ift-api-php
```