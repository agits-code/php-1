<?php require ('partials/head.php');
echo '<h1>FORM</h1>';
echo '<h2>REQUEST</h2>';
echo '<pre>';
var_dump($_REQUEST);
echo '</pre>';

echo '<h2>POST</h2>';
echo '<pre>';
var_dump($_POST);
echo '</pre>';

echo '<h2>GET</h2>';
echo '<pre>';
var_dump($_GET);
echo '</pre>';

echo '<h2>SERVER</h2>';
echo '<pre>';
 var_dump($_SERVER);
 echo '</pre>';

 require ('partials/footer.php');?>

