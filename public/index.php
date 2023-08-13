<?php

require_once __DIR__ . '/../vendor/autoload.php';

/* Router */
$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {
    $router->setBasePath($_SERVER['BASE_URI']);
} else {
    $_SERVER['BASE_URI']='/';
}


/* Routes */

$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => MainController::class
    ],
    'main-home'
);

/* Dispatch */

$match = $router->match();
$dispatcher = new Dispatcher($match, ErrorController::class);
$dispatcher->dispatch();
