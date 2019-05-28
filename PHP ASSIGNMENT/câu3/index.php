<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post">
		<label>Number A:</label><input type="text" name="a"><br>
		<label>Number B:</label><input type="text" name="b"><br>
		
		<input type="submit" value="submit">
	</form>
	<?php $a = $_POST['a'];
		$b = $_POST['b'];
		$x;
		if ($a == 0 && $b != 0)
		{
			echo 'phương trình vô nghiệm';
		}else if($a == 0 && $b == 0)
		{
			echo 'phương trình vô số nghiệm';
		}else
		{
			$x = -$b/$a;
			echo '<label>Result X:</label><input type="text" name="x" value='.$x;
		}

	 ?>
	 
</body>
</html>