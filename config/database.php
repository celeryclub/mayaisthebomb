<?php

$database_url = isset($_ENV['DATABASE_URL']) ? $_ENV['DATABASE_URL'] : 'mysql://mayaisthebomb:@localhost/mayaisthebomb';

Pheasant::setup($database_url);
