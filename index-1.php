<?php


$nomi = [
    'aghy',
    'ieva',
    'omis'
];
require 'index.view.php';

$tudo = [
    'cosa'=> 'fare spesa',
    'quando'=> 'domani',
    'chi'=> 'io'
];
echo '<pre>';
var_dump($tudo);
echo '</pre>';
$tris = array(
    array(' ',' ',' '),
    array(' ',' ',' '),
    array(' ',' ',' ')
);
$tris[0][0] = 'o';
$tris[1][1] = 'x';
echo '<pre>';
var_dump($tris);
echo '</pre>';
//echo "this is line" . __LINE__ . "of file" . __FILE__;
// stampare testo lungo su più righe con HEREDOC - struttura in output dipende da tag htm
echo <<<PROVA1
<ul>
                         <li>$nomi[2]</li>
    <li>elemento 1</li>
        <li>elemento 2</li>
                                            <li>elemento 3</li>
</ul>
PROVA1;


//stampare testo lungo con NOWDOC ---- apostrofi e non eseguito parsing del variabile
echo <<<'HTML'
<ul>
    <li>$nomi[1]</li>
    <li>elemento 1</li>
    <li>elemento 2</li>
    <li>elemento 3</li>
</ul>
HTML;




echo "this is line" . __LINE__ . "of file" . __FILE__;


