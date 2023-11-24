## About LARAVEL-VOLT

This boilerplate uses laravel php framework version 10 and volt bootstrap admin template.


## Installation

 - Download/Clone the repo
 - `npm install`
 - `composer install`
 - `cp .env.example .env`
 - `php artisan key:generate`
 - Create a database name and setup `.env` file database configuration
  	```
		DB_CONNECTION=mysql
		DB_HOST=127.0.0.1
		DB_PORT=3306
		DB_DATABASE=
		DB_USERNAME=root
		DB_PASSWORD=
	```
 - `php artisan migrate:fresh --seed`

## How to Access using default laravel web server

 - Open terminal
 - Change directory to project root folder
 - `php artisan serve`

## How to Access using laragon

 - Reload laragon
 - Open chome and type the project-folder name example: `http://laravel-volt.test`

## Default Login Credential

 - Username: `test@test.com`
 - Password: `12345678`
