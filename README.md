# Lineas de código para instalación en docker

## Entorno local

Crear un dominio llamado loro.local

## Dentro de la carpeta docker

`docker-compose up -d --build --remove-orphans`

## Dentro de la carpeta platform

`docker exec -u $(id -u):$(id -g) loro-php composer install`

`chmod 777 -R storage`

`chmod 777 -R bootstrap/cache/`

`cp .env.example .env`

`docker exec -u $(id -u):$(id -g) loro-php php artisan key:generate`

`docker exec -u $(id -u):$(id -g) loro-php php artisan migrate:fresh --seed`