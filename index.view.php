
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
            text-align: center;
            font-size: large;



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

</body>
</html>
