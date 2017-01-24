# Laravel Demo Project

##### Clone this project from git and install dependencies:
```sh
git clone https://github.com/{your-account-please-after-you-fork-this-repo}/LaravelDemo.git
cd LaravelDemo
composer install
```

##### Prepare the .env file:
```sh
cp .env.example2 .env
```

##### Set-up database:
```sh
touch database/database.sqlite
php artisan migrate --seed
```

##### Set-up encripted key:
```sh
php artisan key:generate
```

##### Start the service:
```sh
php artisan serve --host=0.0.0.0
```
