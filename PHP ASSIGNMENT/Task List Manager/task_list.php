<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task list manager</title>
</head>
<body>
	<header>
		<h1>Task list manager</h1>
	</header>
	<main>
		<!-- part1	error -->
		<?php if(count($errors) > 0)  : ?>
			<h2>Errors</h2>
			<ul>
				<?php foreach ($errors as $value) : ?>
					<li><?php echo htmlspecialchars($value); ?></li>
				<?php endforeach; ?>
				
			</ul>
		<?php endif; ?>
		<!-- part 2 the tasks	 -->
		<h2>Tasks</h2>
		<?php if(count($task_list) == 0 ) : ?>
			<p>there are no task in the task list</p>
			<?php else: ?>
				<ul>
					<?php foreach ($task_list as $id=>$task)  : 	?>
						<li><?php echo $id +  1 . '.'. htmlspecialchars($task); ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
			<br>
			<!-- part 3 add the form -->
			<h2>Add task</h2>
			<form action="." method="post">
				<?php foreach ($task_list as $task) : ?>
					<input type="hidden" name="tasklist[]" value="<?php echo htmlspecialchars($task); ?>">
				<?php endforeach; ?>
				<input type="hidden" name="action" value="add">
				<label>Task:</label>
				<input type="text" name="task"><br>
				<label>&nbsp;</label>
				<input type="submit" value="Add task"><br>
			</form>
			<!-- part-4	delete -->
			<?php if(count($task_list) > 0) : ?>
				<h2>Delelte Task</h2>
				<form action="." method="post">
					<?php foreach ($task_list as $task) :?>
						<input type="hidden" name = "tasklist[]" value="<?php echo htmlspecialchars($task) ; ?>">
					<?php endforeach; ?>
					<input type="hidden" name="action" value="delete">
					<label>Task:</label>
					<select name="taskid" id="">
						<?php foreach ($task_list as $id => $task) :?>
							<option value=" <?php echo $id; ?>"><?php  echo htmlspecialchars($task);?></option>
						<?php endforeach; ?>
					</select>
					<br>
					<label>&nbsp;</label>
					<input type="submit" value="Delete Task">
				</form>
			<?php endif; ?>
	</main>
</body>
</html>