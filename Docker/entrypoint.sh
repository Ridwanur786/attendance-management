#!/bin/bash


check_db(){
    
        # Wait for the database to become available
        /usr/local/bin/wait-for-it.sh database:3306 -t 60
}
if [ ! -f "vendor/autoload.php" ]; then
    composer install --no-progress --no-interaction

fi


if [ !  -f "env"]; then
    echo "Creating env file for env $APP_ENV"
    cp .env-example .env

else 
   
   echo "env file exists"

fi    

check_db

php artisan migrate
php artisan optimize
php artisan cache:clear
php artisan config:clear
php artisan route:clear

php artisan serve --port=$PORT --host=0.0.0.0 --env=.env
exec docker-php-entrypoint "$@"