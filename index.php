<?php

echo "<script>
    document.write('today is ' + Date()); 
</script>";    //stampa data corretta
echo "<br/>";

$nomi = [
     'aghy',
     'ieva',
     'omis'
 ];
require 'index.view.php';

echo date('T') . "\r";   // stampa fuso orario --> UTC è il fuso orario di base del Tempo universale coordinato
echo date('e') . "\n" ;  // stampa timezone --> UTC è il fuso orario di base del Tempo universale coordinato


//date_default_timezone_set('Europe/Rome');
// stampa su più righe con <pre>
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
echo "this is line" . __LINE__ . "of file" . __FILE__;
// stampare testo lungo su più righe con HEREDOC - struttura in output dipende da tag html
$name1 = 'Simone';
$html = <<<HTML
<ul>
                         <li>$name1</li>
    <li>elemento 1</li>
        <li>elemento 2</li>
                                            <li>elemento 3</li>
</ul>
HTML;
echo $html;
//stampare testo lungo con NOWDOC ---- apostrofi e non eseguito parsing del variabile
$html = <<<'HTML'
<ul>
    <li>$name</li>
    <li>elemento 1</li>
    <li>elemento 2</li>
    <li>elemento 3</li>
</ul>
HTML;
echo $html;


$sql = <<<'SQL'

select *
  from $tablename
 where id in [$order_ids_list]
   and product_name = "widgets"
   
   select *
  from $tablename
 where id in [$order_ids_list]
   and product_name = "widgets"
   <br><br>
   select *
  from $tablename
 where id in [$order_ids_list]
   and product_name = "widgets"
   
SQL;
echo $sql;

echo "this is line" . __LINE__ . "of file" . __FILE__;
?>
prova tris
