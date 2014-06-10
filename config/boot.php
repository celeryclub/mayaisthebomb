<?php

/*
    Load path helpers
*/
require __DIR__.'/paths.php';

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
  'templates.path' => appPath().'/templates'
));

/*
    Connect to database
*/
require configPath().'/database.php';

/*
    Register models
*/
spl_autoload_register(function($class) {
  include appPath().'/models/'.$class.'.php';
});

/*
    Load routes/controllers
*/
require appPath().'/routes/admin.php';
require appPath().'/routes/public.php';

/*
    Configure Twig views
*/
$view = $app->view();
$view->parserOptions = array(
  'debug' => true,
  'cache' => configPath().'/cache'
);
$view->parserExtensions = array(
  new \Slim\Views\TwigExtension()
);

return $app;
