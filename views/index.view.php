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
		<li><a href="/php-1/views/about-culture.view.php">About Page</a> </li>

	</ul>
</nav>
 <?php if (isset($_GET['user'])) : ?>
 <h1> <?= 'Hello World, ' . htmlspecialchars($_GET['user']);?></h1>
<?php else: ?>
	<h1> <?= 'Hello World, ' . 'Anonimo';?></h1>
<?php endif ?>

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


</body>
</html>
