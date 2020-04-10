
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        header {
            background-color: lightgray;
            padding: 2em;
            text-align: center;
        }
    </style>

</head>

<body>



  <ul>
<!--questa versione è più elegante -->
      <?php foreach ($names as $name) : ?>
           <li><?= $name ?></li>
      <?php  endforeach; ?>



  </ul>

</body>
</html>
