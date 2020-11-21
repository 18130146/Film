<?php
require_once '../config/connection.php';

$session_id = $_GET['id'];
$session = mysqli_query($connect, "SELECT * FROM `Киносеансы` WHERE `id`='$session_id'"); 
$session = mysqli_fetch_assoc($session);

$film_id = $_GET['id'];
$film = mysqli_query($connect, "SELECT * FROM `Фильмы` WHERE `id`='$film_id'"); 
$film = mysqli_fetch_assoc($film);

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
	<form action="vendor/updates.php" method="post">
		<input type="hidden" name="id" value="<?=$session['id'] ?>">
		<p>ID фильма</p> 
	 	<input type="text" name="title8" value="<?=$film['id'] ?>">
		<p>ID кинозала</p> 
	 	<input type="text" name="title9" value="<?=$hall['id'] ?>">
	 	<p>Дата и время начала показа</p> 
	 	<input type="text" name="title10" value="<?=$session['Дата и время начала показа'] ?>">
	 	<p>Количество мест</p>
	 	<input type="text" name="title11" value="<?=$session['Количество мест'] ?>">
		<p>Количество занятых мест</p>
	 	<input type="text" name="title12" value="<?=$session['Количество занятых мест'] ?>">
	 	<input type="submit" value="Изменить">
 	
 </form>
</body>
</html>