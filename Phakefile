<?php

require __DIR__.'/config/boot.php';

task('schema', function() {
    echo "Importing database schema...\n";
    $migrator = new \Pheasant\Migrate\Migrator();
    $migrator->create('reasons', Reason::schema());
});

task('server', function() {
    echo "Server starting...\n";
    system('php -S localhost:9000 -t public/ server.php');
});
