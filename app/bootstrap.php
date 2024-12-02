<?php

// Load Composer autoload
require(__DIR__ . '/../vendor/autoload.php');

// Load configuration files
require(__DIR__ . '/config/Database.php');
require(__DIR__ . '/config/Routes.php');
require(__DIR__ . '/config/Views.php');
require(__DIR__ . '/config/Permissions.php');

$config = require(__DIR__ . '/config/App.php');

foreach ($config as $key => $value) {
    Flight::set($key, $value);
}

// Start the application
Flight::start();
