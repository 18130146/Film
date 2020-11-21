<?php
require_once '../config/connection.php';

$hall_id = $_GET['id'];
$hall = mysqli_query($connect, "SELECT * FROM `Кинозалы` WHERE `id`='$hall_id'"); 
$hall = mysqli_fetch_assoc($hall);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Изменить строку</title>
</head>
<body>
	<form action="vendor/updateh.php" method="post">
		<input type="hidden" name="id" value="<?=$hall['id'] ?>">
	 	<p>Название зала</p> 
	 	<input type="text" name="title6" value="<?=$hall['Название зала'] ?>">
	 	<p>Категория</p>
	 	<input type="text" name="title7" value="<?=$hall['Категория'] ?>">

	 	<input type="submit" value="Изменить">
 	
 </form>
</body>
</html>