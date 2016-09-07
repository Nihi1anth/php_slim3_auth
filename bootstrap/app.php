<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';

$settings = [
    'settings' => [
        'displayErrorDetails' => true,
    ]
];

$app = new \Slim\App($settings);

require __DIR__ . '/../app/routes.php';