#!/bin/sh
php app/console doctrine:schema:drop --force
php app/console doctrine:schema:update --force
yes y | php app/console doctrine:fixtures:load
