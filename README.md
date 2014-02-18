# Maya is the Bomb

## Prerequisites

You should already have MySQL and PHP 5.4+ installed. If necessary, you can install MySQL and PHP via [Homebrew](http://brew.sh).

## Development setup

To set up a local MySQL user and database:

```sh
mysql -uroot -e "CREATE DATABASE mayaisthebomb;"
mysql -uroot -e "GRANT ALL PRIVILEGES ON mayaisthebomb . * TO 'mayaisthebomb'@'localhost';"
```

## Development server

To start a development server on port 9000 from the project directory:

```sh
bin/phake server
```

## Migrations

To run database migrations from the project directory:

```sh
bin/phpmig migrate
```

## Production setup

Set up your server using the [PHD](https://github.com/stephendavis89/PHD) method. Inside `.htaccess`, use `SetEnv` to set the `DATABASE_URL` variable with the format `mysql://username:password@hostname/database`.
