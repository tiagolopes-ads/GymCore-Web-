<?php

class Router
{
    private array $routes = [];

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function dispatch(string $uri): void
    {
        // Remove query strings da URL
        $path = parse_url($uri, PHP_URL_PATH);

        if (array_key_exists($path, $this->routes)) {
            [$controllerName, $method] = $this->routes[$path];

            if (class_exists($controllerName)) {
                $controller = new $controllerName();
                if (method_exists($controller, $method)) {
                    $controller->$method();
                    return;
                }
            }
        }

        // Caso a rota não seja encontrada
        http_response_code(404);
        require_once ROOT_PATH . '/app/Views/404.php';
    }
}