<?php

require 'functions.php';
//require 'task.php';
$query = require 'core/bootstrap.php';

$tasks = $query->fetchALLTasks('todos');

$nomi = [
     'aghy',
     'ieva',     'omis'
 ];
dump($nomi);
$eta = 17;
if (maggiorenne($eta)) {
    echo 'benvenuto';
} else {
    echo 'sei troppo giovane';
}
$tudo = [
	'cosa'=> 'fare spesa',
    'quando'=> 'domani',
    'chi'=> 'io'
];
$tudo['fatto'] = false;

$utente = (isset($_GET['user'])) ? $_GET['user'] : 'Anonimo';
//if (!isset($_GET['user'])) {

//    die('Come ti chiami?');

//}

require 'views/index.view.php';
dd($tudo);
