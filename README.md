Please update your docker and docker-compose to latest version.
````
docker-compose build 
docker-compose up -d

docker exec -it pocker-choice_php bash
composer install
php index.php
exit

````