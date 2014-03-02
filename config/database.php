<?php

$database_url = getenv('DATABASE_URL') ?: 'mysql://mayaisthebomb:@localhost/mayaisthebomb';

Pheasant::setup($database_url);
