
   <?php require ('partials/head.php');?>



 <?php if (isset($_GET['user'])) : ?>
 <h1> <?= 'Hello World, ' . htmlspecialchars($_GET['user']);?></h1>
<?php else: ?>
	<h1> <?= 'Hello World, ' . 'Anonimo';?></h1>
<?php endif ?>


 <h3>My Tasks</h3>
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

<?php require ('partials/footer.php');?>