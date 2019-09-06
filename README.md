# Rahatlatıcı SEsler
### Installation

[Docker](https://www.docker.com/) gereklidir.

```sh
//Kurulum
$ git pull https://github.com/ugurozyilmaz/relaxing_sounds.git
$ cd relaxing_sounds/laradock
$ sudo /etc/init.d/apache2 stop (80 portu doluysa) 
$ sudo docker-compose up ngnix mysql
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