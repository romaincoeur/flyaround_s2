flyaround
=========

flyaround est une plateforme de partage de bon plan de vol à partager entre pilotes amateurs. Les pilotes peuvent se créer
un compte librement et saisir des flies qui représentent des points d'intéret à survoler.


1) Installation
---------------


Cloner le projet

    git clone git@github.com:romaincoeur/flyaround_s2.git
    cd flyaround_s2
    
Basculer sur la branche 'full-stack'

    git checkout full-stack
    
Générer les clés SSH pour JWT Bundle (le mot de passe par défaut est azerty1234, il est peut-etre changé dans parameters.yml)

    mkdir -p app/var/jwt
    openssl genrsa -out app/var/jwt/private.pem -aes256 4096
    openssl rsa -pubout -in app/var/jwt/private.pem -out app/var/jwt/public.pem
    
Mettre à jour les vendors

    composer install
    
Donner les droits en écriture au serveur

    ./bash/chmod.sh
    
Création de la base de données

    php app/console doctrine:generate:database
    php app/console doctrine:schema:update --force


2) Configuration
----------------

Charger les données initiales

    php app/console doctrine:fixtures:load
    
    
3) Contribuer
-------------

flyaround est un projet open-source. Toute personne souhaitant contribuer au projet peut proposer des pull-request.
Les bonnes pratiques à respecter sont celles définies par sensiolabs dans le document suivant [http://symfony.com/doc/current/best_practices/index.html][1]
Les config de doctrine, des services et des velidations sont en YAML.


[1]:  http://symfony.com/doc/current/best_practices/index.html
