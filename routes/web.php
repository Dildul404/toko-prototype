<?php

use App\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/products', 'ProductController@index');

return $router;