<?php

use Core\Route;

$route = new Route;
$route->resource('users','UserController');
pre($route->routes);