## WooShared Backend in Laravel
### Stack:
- PHP with Laravel 10
- MariaDb
- Docker

## Installation
- `git clone https://github.com/laravel/laravel.git application`
- `docker exec woocommerce-shared_backend_1 composer install`
- `sudo rm .git .gitignore .gitattributes .github/ -R`
- `cp .env.example .env`
- `docker exec woocommerce-shared_backend_1 php artisan key:generate`
- `docker exec woocommerce-shared_backend_1 php artisan migrate`
- `docker exec woocommerce-shared_backend_1 composer require laravel/breeze --dev`
- `docker exec woocommerce-shared_backend_1 php artisan breeze:install api`
