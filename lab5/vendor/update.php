<?php
require_once '../config/connection.php';

$id=$_POST['id'];
$title1 = $_POST['title1'];
$title2 = $_POST['title2'];
$title3 = $_POST['title3'];
$title4 = $_POST['title4'];
$title5 = $_POST['title5'];

mysqli_query($connect, "UPDATE `Фильмы` SET `Название` = '$title1', `Жанр` = '$title2', `Режиссёр` = '$title3', `Год выпуска` = '$title4', `Кассовые сборы, $` = '$title5' WHERE `Фильмы`.`id` = '$id'");
header('Location: ../films.php');
?>