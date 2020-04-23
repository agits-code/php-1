<?php

 require 'core/bootstrap.php';
 //die(var_dump($app));

//    $router = Router::load('routes.php');
//    $uri = trim($_SERVER['REQUEST_URI'],'/');
//    require $router->direct($uri);
//    oppure:

try {

    require Router::load('routes.php')
        ->direct(Request::uri(),Request::method());

    } catch (\Exception $e){
    echo $e->getMessage();
    }










