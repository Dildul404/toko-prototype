<?php

namespace App;

class Router
{
    private $routes = [];

    public function get($uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    public function dispatch($method, $uri)
    {
        $uri = parse_url($uri, PHP_URL_PATH);

        // hapus base folder (penting kalau pakai htdocs)
        $base = '/toko-prototype/public';
        $uri = str_replace($base, '', $uri);

        // pastikan minimal '/'
        if ($uri === '') {
            $uri = '/';
        }

        if (isset($this->routes[$method][$uri])) {
            $action = $this->routes[$method][$uri];

            list($controller, $method) = explode('@', $action);

            $controller = "App\\Controllers\\$controller";

            $controllerInstance = new $controller();

            return $controllerInstance->$method();
        }

        http_response_code(404);
        echo "404 Not Found";
    }
}