<?php

 require 'core/bootstrap.php';

 // visualizzo contenuto della variabile app
 echo '<br>';
 echo '<h4>variabile APP</h4>';
 echo '<pre>';
 var_dump($app);
 echo '</pre>';



try {

    require Router::load('routes.php')
        ->direct(Request::uri(),Request::method());

    } catch (\Exception $e){
    echo $e->getMessage();
    }










