<?php

// Define a constante da raiz do projeto para evitar erros de caminho (path) no Windows/Linux
define('ROOT_PATH', dirname(__DIR__));

// Autoload para carregar automaticamente as classes de Core e Controllers
spl_autoload_register(function ($className) {
    $paths = [
        ROOT_PATH . '/core/' . $className . '.php',
        ROOT_PATH . '/app/Controllers/' . $className . '.php',
    ];

    foreach ($paths as $path) {
        if (file_exists($path)) {
            require_once $path;
            return;
        }
    }
});

// Carrega as rotas e inicia o roteador
$routes = require_once ROOT_PATH . '/config/routes.php';
$router = new Router($routes);
$router->dispatch($_SERVER['REQUEST_URI']);