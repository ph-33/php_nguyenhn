
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
		<?php 
			$math = $_POST['math'];
			$physics = $_POST['physics'];
			$chemistry = $_POST['chemistry'];
			$average = ($math + $physics + $chemistry)/3;
			echo 'average is :'.$average.'<br>';
			if(($math) == '' || ($physics) == '' || ($average) == '')
			{
				echo 'bạn không được để trống';
				exit;
			}
			if(!is_numeric($math) || !is_numeric($physics) || !is_numeric($average))
			{
				echo 'làm ơn nhập số';
				exit;
			}
			if($math > 0 || $math >10 || $physics <0 || $physics >10 || $chemistry <0 || $chemistry>10)
			{
				echo 'nhập điểm  trong khoảng từ 0 - 10';
			} 
			if($average >= 8.0)
			{
				$rank = 'A';
			}else if($average >= 6.5)
			{
				$rank = 'B';
			}else if($average >= 5)
			{
				$rank = 'C';
			}else
			{
				$rank = 'D';
			}

		 ?>
		 <label>Rank:</label><input type="text" value = "<?php echo $rank; ?>">

		 

	
</body>
</html>