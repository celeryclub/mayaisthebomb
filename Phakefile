<?php

require __DIR__.'/config/boot.php';

task('schema', function() {
    echo "Importing database schema...\n";
    if (Reason::find()->count() == 0) {
        $migrator = new \Pheasant\Migrate\Migrator();
        $migrator->create('reasons', Reason::schema());
    } else {
        throw new Exception("Please remove all reasons before importing schema\n");
    }
});

task('server', function() {
    echo "Server starting...\n";
    system('php -S localhost:9000 -t public/ server.php');
});
