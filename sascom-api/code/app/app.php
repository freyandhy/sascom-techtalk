<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';

// Load Our Database Settings
require __DIR__ . '/db.php';

// Start Set Configuration
$config = array (
        'displayErrorDetails' => true,
        'db' => $dbConfig,
    );
// End Set Configuration

// Create Object From Slim
$app = new \Slim\App(['settings' => $config]);

// Load Our Container
require __DIR__ . '/container.php';

// Load Our Routes
require __DIR__ . '/routes.php';