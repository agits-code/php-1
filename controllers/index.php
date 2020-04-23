<?php
$tasks = $app['database']->fetchALLTasks('todos');
require 'views/index.view.php';