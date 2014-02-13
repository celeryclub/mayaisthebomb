<?php

$db_host = isset($_ENV['DB_HOST']) ? $_ENV['DB_HOST'] : 'localhost';
$db_name = isset($_ENV['DB_NAME']) ? $_ENV['DB_NAME'] : 'mayaisthebomb';
$db_user = isset($_ENV['DB_USER']) ? $_ENV['DB_USER'] : 'mayaisthebomb';
$db_pass = isset($_ENV['DB_PASS']) ? $_ENV['DB_PASS'] : '';

ORM::configure(array(
    'connection_string' => 'mysql:host='.$db_host.';dbname='.$db_name,
    'username' => $db_user,
    'password' => $db_pass
));
