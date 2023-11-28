## About Contact Management System

This boilerplate uses Laravel PHP Framework V10 and Volt Bootstrap Admin Template.


## Features

 - System Authentication
 - Account Profile 
 - Users Management

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
		DB_DATABASE=contact_management_system_db
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
 - Open chrome and type the project-folder name example: `http://contact-management-system.test`

## Default Login Credential

 - Username: `test@test.com`
 - Password: `12345678`
