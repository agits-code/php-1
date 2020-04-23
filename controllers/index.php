<?php
$tasks = $app['database']->fetchALLTasks('todos');
//$names = $app['database']->selectALL('users');
require 'views/index.view.php';