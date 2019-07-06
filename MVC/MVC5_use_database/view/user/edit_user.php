<form action="index.php" method="post">
	<input type="hidden" name="action" value="edit">
    <input type="hidden" name = "email1" value ="<?php echo filter_input(INPUT_POST,'email');?>">
    Email:<input type="text" name ="email" value="<?php echo filter_input(INPUT_POST,'email');?>" disabled><br>
	FirstName:<input type="text" name ="firstName" value="<?php echo filter_input(INPUT_POST,'firstName'); ?>"><br>
	LastName:<input type="text" name ="lastName" value="<?php echo filter_input(INPUT_POST,'lastName'); ?>"><br>
	<button type="">Update</button>
</form>