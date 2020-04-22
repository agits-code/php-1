<?php
//chiamo metodo della classe Router --> definisco  array associativo con valori "ruotes"
$router->define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'contact' => 'controllers/contact.php',
    'about-culture' => 'controllers/about-culture.php',
    'style' => 'public/css/style.css'


]);
