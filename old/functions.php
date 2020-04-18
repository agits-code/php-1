<?php



function dd($var){
    echo '<pre>';
    die(var_dump($var));
    echo '</pre>';
}
function dump($var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
function maggiorenne($eta){
    if ($eta >= 21) {
        return true;
    } else {
        return false;
    }

}