
<?php
require_once '../config/connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Наталия Баранова</title>
</head>
<style type="text/css">
	body {
		font-family: Arial, Verdana, sans-serif;
		color: #111111;
	}
	table{
		width: 600px;
	}
	th, td {
		padding: 7px 10px 10px 10px;
	}
	th{
		text-transform: uppercase;;
		letter-spacing: 0.1em;
		font-size: 90%;
		border-bottom: 2px solid #111111;
		border-top: 1px solid #999;
		text-align: left;
	}
	tr:hover {
		background-color: #c3e6e5;
	}
	input[type="submit"]{
		border: 1px solid #111111;
		background-color: #c3e6e5;
		color: ##c3e6e5;
		border-radius: 5px;
		padding: 5px;
		margin-top: 10px;
	}
	input[type="submit"]:hover {
		border: 1px solid #111111;
		background-color: #c3e6e5;
		color: #FFFFFF;
		cursor: pointer;
	}
	.title {
		float: left;
		width: 310px;
		clear: left;
	}
	.submit {
		width: 310px;
		text-align: right;
	}
</style>
<body>
 <table>
 	<tr>
 		<th>ID</th>
 		<th>Название</th>
 		<th>Жанр</th>
 		<th>Режиссёр</th>
 		<th>Год выпуска</th>
 		<th>Кассовые сборы, $</th>
 	</tr>
<?php
 	$films = mysqli_query($connect, "SELECT * FROM `Фильмы`");
 	$films = mysqli_fetch_all($films);
 	foreach ($films as $film) {
 	?>
 	<tr>
 		<td><?= $film[0] ?></td>
 		<td><?= $film[1] ?></td>
 		<td><?= $film[2] ?></td>
 		<td><?= $film[3] ?></td>
 		<td><?= $film[4] ?></td>
 		<td><?= $film[5] ?></td>
 		<td><a style="color: green" href="update.php?id=<?= $film[0] ?>">Изменить</a></td>
 		<td><a style="color: red" href="vendor/delete.php?id=<?= $film[0] ?>">Удалить</a></td>
 	</tr>
 <?php
 }
 ?>

 </table>
 <form action="vendor/creation.php" method="post">
 	<p>Название</p>
 	<input type="text" name="title1">
 	<p>Жанр</p>
 	<input type="text" name="title2">
 	<p>Режиссёр</p>
 	<input type="text" name="title3">
 	<p>Год выпуска</p>
 	<input type="number" name="title4">
 	<p>Кассовые сборы, $</p>
 	<input type="text" name="title5">
 	<input type="submit" value="Добавить">
 	
 </form>
  <table>
 	<tr>
 		<th>ID</th>
 		<th>Название зала</th>
 		<th>Категория</th>
 	</tr>
 <?php
 	$halls = mysqli_query($connect, "SELECT * FROM `Кинозалы`");
 	$halls = mysqli_fetch_all($halls);
 	foreach ($halls as $hall) {
 	?>
 	<tr>
 		<td><?= $hall[0] ?></td>
 		<td><?= $hall[1] ?></td>
 		<td><?= $hall[2] ?></td>

 		<td><a style="color: green" href="updateh.php?id=<?= $hall[0] ?>">Изменить</a></td>
 		<td><a style="color: red" href="vendor/deleteh.php?id=<?= $hall[0] ?>">Удалить</a></td>
 	</tr>
 <?php
 }
 ?>

 </table>
 <form action="vendor/creationh.php" method="post">
 	<p>Название зала</p>
 	<input type="text" name="title6">
 	<p>Категория</p>
 	<input type="text" name="title7">
 	<input type="submit" value="Добавить">
 	
 </form>

 <table>
 	<tr>
 		<th>ID</th>
 		<th>ID фильма</th>
 		<th>ID кинозала</th>
 		<th>Дата и время начала показа</th>
 		<th>Количество мест</th>
 		<th>КОличество занятых мест</th>
 	</tr>
 <?php
 	$sessions = mysqli_query($connect, "SELECT * FROM `Киносеансы`");
 	$sessions = mysqli_fetch_all($sessions);
 	foreach ($sessions as $session) {
 	?>
 	<tr>
 		<td><?= $session[0] ?></td>
 		<td><?= $session[1] ?></td>
 		<td><?= $session[2] ?></td>
 		<td><?= $session[3] ?></td>
 		<td><?= $session[4] ?></td>
 		<td><?= $session[5] ?></td>

	
 		<td><a style="color: green" href="vendor/updates.php?id=<?= $session[0] ?>">Изменить</a></td>
 		<td><a style="color: red" href="vendor/deletes.php?id=<?= $session[0] ?>">Удалить</a></td>
 	</tr>
 <?php
 }
 ?>

 </table>

 <a style="color: blue" href="vendor/creations.php">Добавить</a>

 </body>
</html>