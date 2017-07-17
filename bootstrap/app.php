<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';

$settings = [
    'settings' => [
        'displayErrorDetails' => true,
    ]
];

$app = new \Slim\App($settings);

$container = $app->getContainer();

$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', [
        'cache' => false,
    ]);
    
    $view->addExtension(new \Slim\Views\TwigExtension(
        $c->router,
        $c->request->getUri()
    ));
    
    return $view;
};

require __DIR__ . '/../app/routes.php';