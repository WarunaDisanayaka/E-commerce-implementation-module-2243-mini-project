# E-commerce-implementation-module-2243-mini-project

pre-requrements

    install xampp or wampp server
    install node js
    install comporser - https://getcomposer.org/download/
        (download exe file and install, do not provide poxy)
    
setup pc 

open cmd and type this

        <code>composer global require laravel/installer</code>
    
setup project

clone this repo

open cmd in that folder

Then run bellow command

install vender files
    <code>composer install
    composer update</code>

install node files
    npm install

cope example .env file to .env file
    copy .env.example .env

Genarete the key
    php artisan key:generate

create database name workers_yard

change bellow if you use another one in .env file
    DB_DATABASE=blog
    DB_USERNAME=root
    DB_PASSWORD=

Run these command and run the project
    npm run dev

open another cmd in that project folder and run this command in that
    php artisan migrate
    php artisan serve


All the vue files are created in "resources/js/views" folder