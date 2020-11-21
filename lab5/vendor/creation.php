<?php
require_once '../config/connection.php';

$title1 = $_POST['title1'];
$title2 = $_POST['title2'];
$title3 = $_POST['title3'];
$title4 = $_POST['title4'];
$title5 = $_POST['title5'];
$films = mysqli_query($connect, "INSERT INTO `Фильмы` (`ID`, `Название`, `Жанр`, `Режиссёр`, `Год выпуска`, `Кассовые сборы, $`) VALUES (NULL, '$title1', '$title2', '$title3', '$title4', '$title5');");
header('Location: ../films.php');
?>