<?php
// require autolaod
require_once __DIR__ . '/../vendor/autoload.php';

use Framework\Router;

Router::get('/user/list', 'UserController@index');
Router::get('/user/detail/{id}', 'UserController@detailById');
Router::get('/user/detail/2', 'UserController@detailBy');

$router = new Router();
$route = $router->getRoute();
print_r($route);

