<?php

$app = new \Slim\Slim;

\Slim\Slim::registerAutoloader();

require __DIR__.'/../config/database.php';

require __DIR__.'/routes/static.php';
/*
    Models
*/
spl_autoload_register(function($class) {
    include __DIR__.'/models/'.$class.'.php';
});

return $app;
