<?php

use Core\Container;
use Core\App;
use Core\Database;

$container = new Container();
$container->bind(Database::class, function() {
    $config = require base_path('config.php');
    return new Database($config['Database']);
});

App::setContainer($container);