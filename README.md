# Requirements
- Laravel 5.8^ or greater
- Composer
- Php 7.1^


# Installation

open your command line and run

```
  
  composer install

```


create a database named 

```

	hsync 

```
in your phpmyadmin

and open .env file

```php

	DB_HOST=127.0.0.1
	DB_DATABASE=hsync
	DB_USERNAME=root
	DB_PASSWORD=

```

run on your cli

```

   php artisan migrate

```

also run on your cli

```

	php artisan db:seed --class=PositionsTableSeeder
	php artisan db:seed --class=UsersTableSeeder

```


port starts with 127.0.0.1:8000


Your good to go!