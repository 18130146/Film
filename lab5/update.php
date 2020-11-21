<?php
require_once '../config/connection.php';

$film_id = $_GET['id'];
$film = mysqli_query($connect, "SELECT * FROM `Фильмы` WHERE `id`='$film_id'"); 
$film = mysqli_fetch_assoc($film);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Изменить строку</title>
</head>
<body>
	<form action="../vendor/update.php" method="post">
		<input type="hidden" name="id" value="<?=$film['id'] ?>">
	 	<p>Название</p> 
	 	<input type="text" name="title1" value="<?=$film['Название'] ?>">
	 	<p>Жанр</p>
	 	<input type="text" name="title2" value="<?=$film['Жанр'] ?>">
	 	<p>Режиссёр</p>
	 	<input type="text" name="title3" value="<?=$film['Режиссёр'] ?>">
	 	<p>Год выпуска</p>
	 	<input type="number" name="title4" value="<?=$film['Год выпуска'] ?>">
	 	<p>Кассовые сборы, $</p>
	 	<input type="text" name="title5" value="<?=$film['Кассовые сборы, $'] ?>">
	 	<input type="submit" value="Изменить">
 	
 </form>
</body>
</html>