<?php

// Define a constante da raiz do projeto normalizando as barras para Windows/Linux
define('ROOT_PATH', str_replace(['/', '\\'], DIRECTORY_SEPARATOR, dirname(__DIR__)));

// Autoload para carregar automaticamente Core, Controllers, Models e Configs
spl_autoload_register(function ($className) {
    $paths = [
        ROOT_PATH . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . $className . '.php',
        ROOT_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR . $className . '.php',
        ROOT_PATH . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Models' . DIRECTORY_SEPARATOR . $className . '.php',
        ROOT_PATH . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . $className . '.php',
    ];

    foreach ($paths as $path) {
        if (file_exists($path)) {
            require_once $path;
            return;
        }
    }
});

// Carrega as rotas e inicia o roteador
$routes = require_once ROOT_PATH . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'routes.php';
$router = new Router($routes);
$router->dispatch($_SERVER['REQUEST_URI']);