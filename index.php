<?php


$query = require 'core/bootstrap.php';

$router = Router::load('routes.php');


$uri = trim($_SERVER['REQUEST_URI'],'/');

try {
    require $router->direct($uri);
    } catch (\Exception $e) {
      echo $e->getMessage();
    }





