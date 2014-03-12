<?php

$publicPath = __DIR__.'/public';

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

$requested = $publicPath.$uri;

if ($uri !== '/' and file_exists($requested)) {
  return false;
}

require $publicPath.'/index.php';
