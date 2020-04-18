<?php


$query = require 'core/bootstrap.php';

$router = new Router;
require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'],'/');

try {
    require $router->direct($uri);
} catch (\Exception $e) {

    echo $e->getMessage();
}




var_dump($_SERVER["REQUEST_URI"]);

