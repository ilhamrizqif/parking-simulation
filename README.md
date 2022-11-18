Install the Project
Firstly first, you need to install composer / plugins on laravel using Composer. But, if you are not install the composer, you can install using Docker with this command:

docker run --rm \
  -u "$(id -u):$(id -g)" \
  $(PWD):/var/www/html  \
  -w /var/www/html \
  laravelsail/php81-composer \
  composer install --ignore-platform-reqs
Running This Project
How to Run this project using Sail ?

Go to this Project, then type :
./vendor/bin/sail up
However, instead of repeatedly typing vendor/bin/sail to execute Sail commands, you may wish to configure a shell alias that allows you to execute Sail's commands more easily:
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
then you can type like this:
sail up
Install Dependencies
We can install any dependencies using composer manager.

Inside your Project forlder, You can install using Laravel Sail like this:
./vendor/bin/sail composer require laravel/sanctum
Or, if you have created a shortcut Alias, you can do like this:
sail composer require laravel/sanctum
Running migration
You can running migration with Laravel Sail like you don't use it. ( Assume we have created a shortcut alias ):

You can create a migration file like this ( Assume we have created a shortcut alias ):
sail artisan make:migration create_users_table
Then, you can execute your migration like this:
sail artisan migrate
