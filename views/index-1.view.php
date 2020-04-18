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

<nav>
    <ul>
        <li><a href="/php-1/views/about.view.php">About Page</a> </li>
        <li><a href="/php-1/views/contact.view.php">Contact Page</a> </li>
    </ul>
</nav>
<!-- <?php if (isset($_GET['user'])) : ?>
 <h1> <?= 'Hello World, ' . htmlspecialchars($_GET['user']);?></h1>
<?php else: ?>
	<h1> <?= 'Hello World, ' . 'Anonimo';?></h1>
<?php endif ?>  -->
<h1> <?= 'Hello World, ' . $utente;?></h1>

<ul>foreach
    <!--questa versione è più elegante -->
    <?php foreach ($nomi as $nome) : ?>
        <li><?= $nome ?></li>
    <?php  endforeach; ?>
</ul>

<!--<ul>
     <?php foreach ($nomi as $nome){ echo "<li> $nome </li>";}?>
 </ul> -->
<h3>lettura database</h3>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->completed) : ?>
                <strike><?= $task->description;?></strike>
            <?php else: ?>
                <?= $task->description;?>
            <?php endif; ?>

        </li>
    <?php endforeach;?>
</ul>
<h3>array associativi</h3>
<ul>
    <?php foreach ($tudo as $key => $value) : ?>
        <li><strong><?= ucwords($key);?></strong>  <?= $value;?></li>
    <?php endforeach;?>

    <li>
        <?php if ( $tudo['fatto']) : ?>
            <div><span class="icon">&#9989;</span></div>
        <?php else: ?>
            <span class="icon">&#10005;</span>
        <?php endif; ?>
    </li>

</ul>

<h1><script>
        document.write('today is ' + Date());
    </script>
</h1>

<h2><?= date('l j F Y  h : i: s  A');?>----data standard</h2>
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
