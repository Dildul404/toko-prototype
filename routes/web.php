<?php

use App\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/products', 'ProductController@index');
$router->get('/products/{id}', 'ProductController@show');
$router->get('/login', 'AuthController@showLogin');
$router->post('/login', 'AuthController@login');
$router->get('/register', 'AuthController@showRegister');
$router->post('/register', 'AuthController@register');
$router->get('/logout', 'AuthController@logout');
$router->get('/dashboard', 'DashboardController@index');

return $router;