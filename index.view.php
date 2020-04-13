
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h1 {
            background-color: lightgray;
            padding: 2em;
            text-align: center;
        }
        ul {
            background-color: hotpink;

            font-size: large;

        }
        h2 {
            background-color: aqua;
        }
    </style>

</head>

<body>
 <h1> <?= 'Hello World, ' . htmlspecialchars($_GET['user']);?></h1>

  <ul>foreach
<!--questa versione è più elegante -->
      <?php foreach ($nomi as $nome) : ?>
           <li><?= $nome ?></li>
      <?php  endforeach; ?>
  </ul>

 <ul>
     <?php
           foreach ($nomi as $nome)
           {
           echo "<li> $nome </li>";
     }
    ?>
 </ul>

 <ul>
     <?php foreach ($tudo as $key => $value) : ?>
          <li><strong><?= $key ;?></strong>  <?= $value;?></li>
     <?php endforeach;?>



 </ul>

 <h1><script>
         document.write('today is ' + Date());
     </script>
 </h1>

 <h2><?= date('l j F Y  h : i: s  A');?>/h2>
     <h3><?= "this is line" . __LINE__ . "of file" . __FILE__; ?></h3>
     <h1>
         <pre>
        Hello World
eccoci ci siamo
                    proprio
              oggi!!!!
                    </pre>
     </h1>

</body>
</html>
