# Setting up this project on your PC

##clone this repository 
- git clone lhttps://github.com/GENESDEMON/LUMEN-CRUD-API.git
## cd into your project
- So remember to type cd projectName to move your terminal working location to the project file you just created
## Install Composer Dependencies
- composer install
##  Install NPM Dependencies
- npm install ## or yarn
## Create a copy of your .env file
- cp .env.example .env
## Generate an app encryption key
- php artisan key:generate
- If you check the .env file again, you will see that it now has a long random string of characters in the APP_KEY field. You now have a valid app encryption key.
## Create an empty database for your application
##  In the .env file, add database information to allow Lumen to connect to the database
- In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. This will allow you to run migrations and seed the database
## Migrate the database
- php artisan migrate
## Seed the database
- php artisan db:seed


# Lumen PHP Framework
[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
