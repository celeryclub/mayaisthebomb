<?php

/*
    Create app
*/
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig(),
    'templates.path' => __DIR__.'/templates'
));

/*
    Connect to database
*/
require __DIR__.'/../config/database.php';

/*
    Models
*/
spl_autoload_register(function($class) {
    include __DIR__.'/models/'.$class.'.php';
});

/*
    Routes/Controllers
*/
require __DIR__.'/routes/admin.php';
require __DIR__.'/routes/public.php';

/*
    Configure Twig views
*/
$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => __DIR__.'/cache'
);
$view->parserExtensions = array(
    new \Slim\Views\TwigExtension()
);

return $app;
