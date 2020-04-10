<?php

echo "<script>
    document.write('today is ' + Date()); 
</script>";    //stampa data corretta
echo "<br/>";
$names = [
     'aghy',
     'ieva',
     'omis'
 ];
require 'index.view.php';

echo date('T') . "\r";   // stampa fuso orario --> UTC è il fuso orario di base del Tempo universale coordinato
echo date('e') . "\n" ;  // stampa timezone --> UTC è il fuso orario di base del Tempo universale coordinato


//date_default_timezone_set('Europe/Rome');

echo "<pre>
        Hello World  
eccoci ci siamo 
                    proprio 
              oggi!!!!      
                    </pre>";
echo date('l j F Y  h : i: s  A') . "<br/>";

$tris = array(
		     array(' ',' ',' '),
	         array(' ',' ',' '),
	         array(' ',' ',' ')
);
$tris[0][0] = 'o';
print_r($tris);

?>
prova tris
