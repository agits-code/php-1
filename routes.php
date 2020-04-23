<?php
//chiamo metodo della classe Router --> definisco  array associativo con valori "ruotes"
//$router->define([
//    '' => 'controllers/index.php',
//    'about' => 'controllers/about.php',
//    'contact' => 'controllers/contact.php',
//    'about-culture' => 'controllers/about-culture.php',
   // 'style' => 'public/css/style.css',
//    'names' => 'controllers/add-name.php'


//]);
$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('contact', 'controllers/contact.php');
$router->get('about-culture', 'controllers/about-culture.php');
$router->post('names', 'controllers/add-name.php');


//echo '<pre>';
//var_dump($_SERVER);
//echo '</pre>'   ;