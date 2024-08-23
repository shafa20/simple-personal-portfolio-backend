1. clone the project by this command
git clone https://github.com/shafa20/simple-personal-portfolio-backend.git
2.run command
composer install
if facess issye run command
composer update
3.run command
cp .env.example .env

4.give a database name in .env file 
better to five database name simple_personal_portfolio
now write 22-27 no line like below

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=simple_personal_portfolio
DB_USERNAME=root
DB_PASSWORD=

5. run command
php artisan key:generate
6.run command
php artisan migrate
7.then run command
php artisan serve

