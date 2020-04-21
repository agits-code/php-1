<?php


$query = require 'core/bootstrap.php';
//$router = new Router;
//require 'routes.php';
$router = Router::load();

$uri = trim($_SERVER['REQUEST_URI'],'/'); // leggo URI

try {
    require $router->direct($uri);
    } catch (\Exception $e) {
      echo $e->getMessage();
    }


// require Router::load('ruotes.php')
//     ->direct($uri);

var_dump($_SERVER["REQUEST_URI"]);

