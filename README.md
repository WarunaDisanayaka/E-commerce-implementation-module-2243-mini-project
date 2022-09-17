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

1. clone this repo

2. open cmd in that folder

3. Then run bellow command

4. install vender files

    <code>composer install</code>

    <code>composer update</code>

5. install node files

    <code>npm install</code>

6. cope example .env file to .env file

    <code>copy .env.example .env</code>

7. Genarete the key

    <code>php artisan key:generate</code>

8. create database name workers_yard

9. change bellow if you use another one in .env file

    <code>DB_DATABASE=blog

    DB_USERNAME=root

    DB_PASSWORD=</code>

10. Run these command and run the project

    <code>npm run dev</code>

11. open another cmd in that project folder and run this command in that

    <code>php artisan migrate<code>
    
    <code>php artisan serve</code>


All the vue files are created in "resources/js/views" folder