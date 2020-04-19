<?php


$query = require 'core/bootstrap.php'; // new QueryBuilder(parametri database), require classe Router
// connessi al database al database
$router = new Router;  //crea istanza Router= $router
require 'routes.php';  // assegno valori=ruotes al $router --> metodo define

$uri = trim($_SERVER['REQUEST_URI'],'/'); // leggo URI

try {
    require $router->direct($uri); //
} catch (\Exception $e) {

    echo $e->getMessage();
}




var_dump($_SERVER["REQUEST_URI"]);

