# Rahatlatıcı SEsler
### Installation

[Docker](https://www.docker.com/) gereklidir.

[Postman](https://documenter.getpostman.com/view/3752327/SVfWKkQL?version=latest#d78c6135-ca3f-4a45-83be-89d355446f6f
) üzerinde endpointler verilmiştir.

```sh
//Kurulum
$ git clone https://github.com/ugurozyilmaz/relaxing.git
$ cd relaxing/laradock
$ sudo /etc/init.d/apache2 stop (80 portu doluysa) 
$ sudo docker-compose up -d nginx mysql phpmyadmin workspace
$ sudo docker-compose exec workspace bash

//Laravel Bölümü
$ composer install
$ php artisan key:generate
$ php artisan migrate
$ php artisan db:seed
$ php artisan passport:install


### Todos

-Unittest
-PhpDoc
