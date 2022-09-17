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

    <ul type="1">
        <li>clone this repo</li>
        <li>open cmd in that folder</li>
        <li>Then run bellow command</li>
        <li><code>composer install</code>
            <code>composer update</code>
            <code>npm install<code>
            <code>copy .env.example .env</code>
            <code>php artisan key:generate</code>
        </li>
        <li>create database name workers_yard
        <li>change bellow if you use another one in .env file</li>
            <code>DB_DATABASE=blog
            DB_USERNAME=root
            DB_PASSWORD=</code>
        <li>Run these command and run the project</li>
            <code>npm run dev</code>
        <li>open another cmd in that project folder and run this command in that</li>
            <code> php artisan migrate</code>
            <code>php artisan serve</code>
    </ul>

All the vue files are created in "resources/js/views" folder