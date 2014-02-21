<?php

use Phpmig\Migration\Migration;

class CreateReasons extends Migration {
    public function up() {
        $container = $this->getContainer();
        $container['db']->exec("
            CREATE TABLE IF NOT EXISTS `reasons` (
                `id` INTEGER PRIMARY KEY,
                `number` INTEGER,
                `body` TEXT,
                `footnote` VARCHAR(255),
                `css` TEXT,
                `date` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00'
            );
        ");
    }

    public function down() {
        $container = $this->getContainer();
        $container['db']->exec("DROP TABLE `reasons`;");
    }
}
