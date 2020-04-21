<?php


$query = require 'core/bootstrap.php';

$router = Router::load('routes.php'); //$router = new Router;require 'routes.php';


$uri = trim($_SERVER['REQUEST_URI'],'/'); // leggo URI

try {
    require $router->direct($uri);
    } catch (\Exception $e) {
      echo $e->getMessage();
    }




var_dump($_SERVER["REQUEST_URI"]);

