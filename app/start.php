<?php

$app = new \Slim\Slim;

\Slim\Slim::registerAutoloader();

require __DIR__.'/routes/static.php';

return $app;
