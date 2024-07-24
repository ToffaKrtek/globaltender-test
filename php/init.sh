#!/bin/bash
#
cd laravel
composer install
php artisan migrate
php-fpm -F
