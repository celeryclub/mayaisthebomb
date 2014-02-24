<?php

task('schema', function() {
    require __DIR__.'/vendor/autoload.php';
    require __DIR__.'/config/database.php';
    spl_autoload_register(function($class) {
        include __DIR__.'/app/models/'.$class.'.php';
    });

    echo "Importing database schema...\n";
    $migrator = new \Pheasant\Migrate\Migrator();
    $migrator->create('reasons', Reason::schema());
});

task('server', function() {
    echo "Server starting...\n";
    system('php -S localhost:9000 -t public/ server.php');
});
