<?php

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../config/database.php';

use \Phpmig\Adapter,
    \Pimple;

$container = new Pimple();

$container['db'] = function() {
    return ORM::get_db();
};

$container['phpmig.adapter'] = function($c) {
    return new Adapter\PDO\Sql($c['db'], 'migrations');
};

$container['phpmig.migrations_path'] = __DIR__.'/migrations';

return $container;
