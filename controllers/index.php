<?php
$tasks = $app['database']->selectALL('todos');
$users = $app['database']->selectALL('users');
require 'views/index.view.php';