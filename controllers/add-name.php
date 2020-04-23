<?php
require 'views/names.view.php';
//var_dump('Your typed'. $_POST['name']);
class NamesController{

  public function addName(){

  }

}
$app['database']->insert('users', [
    'name' => $_POST['name']

]);