<?php

$app->get('/', function() {
    echo 'Database connection string: '.ORM::get_config('connection_string');
});
