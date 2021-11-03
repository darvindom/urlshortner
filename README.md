Backend setup (url-shortener-api)

Composer install

Change .env file

change DB config

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root


Run this commands to migration DB

php artisan migrate

to tun localserver

php artisan serve


Frontend Setup 

change .env file 
for backend url -> VUE_APP_BACKENDURL

npm install
npm run serve
