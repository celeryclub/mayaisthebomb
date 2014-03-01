<?php

/*
    Configure environment
*/
@include __DIR__.'/../../environment.php';

/*
    Autoload dependencies
*/
require __DIR__.'/../vendor/autoload.php';

/*
    Instantiate app
*/
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig(),
    'templates.path' => __DIR__.'/../app/templates'
));

/*
    Connect to database
*/
require __DIR__.'/../config/database.php';

/*
    Register models
*/
spl_autoload_register(function($class) {
    include __DIR__.'/../app/models/'.$class.'.php';
});

/*
    Load routes/controllers
*/
require __DIR__.'/../app/routes/admin.php';
require __DIR__.'/../app/routes/public.php';

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
