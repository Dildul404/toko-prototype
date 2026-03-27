<?php

use App\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/products', 'ProductController@index');
$router->get('/products/{id}', 'ProductController@show');

return $router;