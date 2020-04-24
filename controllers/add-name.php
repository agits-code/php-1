<?php
require 'views/names.view.php';
//var_dump('Your typed'. $_POST['name']);



$app['database']->insert('users', [
    'name' => $_POST['name']

]);
header('Location: /');