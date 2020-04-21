
   <?php require ('partials/head.php');?>






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

   <h3> My Task of the day </h3>
	  <ul>
		  <?php foreach ($tasks as $task) : ?>
		    <li>
			 <?php echo ($task->completed) ?
				 (ucwords($task->description) . ' : '.'&#9989'):
			     (ucwords($task->description) . ' : ' .'&#10005');
			  ?>

		    </li>
		  <?php endforeach;?>

	  </ul>


<?php require ('partials/footer.php');?>