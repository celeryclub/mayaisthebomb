# Maya is the Bomb

## Prerequisites

You should already have MySQL and PHP 5.4+ installed. If necessary, you can install MySQL and PHP via [Homebrew](http://brew.sh).

## Development setup

To set up a local MySQL user and database, run:

```sh
mysql -uroot -e "CREATE DATABASE mayaisthebomb;"
mysql -uroot -e "GRANT ALL PRIVILEGES ON mayaisthebomb . * TO 'mayaisthebomb'@'localhost';"
```

## Development server

To start a development server from the project directory, run:

```sh
php -S localhost:9000 -t public/ server.php
```

## Production setup

Set up your server using the [PHD](https://github.com/stephendavis89/PHD) method. Inside `.htaccess`, use `SetEnv` to set the following database values:
* `DB_HOST`
* `DB_NAME`
* `DB_USER`
* `DB_PASS`
