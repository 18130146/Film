<?php


require_once '../config/connection.php';

$title10 = $_POST['title10'];
$title11 = $_POST['title11'];
$title12 = $_POST['title12'];


if($_POST['id8']){
    $title8  = htmlentities(mysqli_real_escape_string($connect, $_POST['id8']));
}
else{ echo("Введены некорректные данные");}


if($_POST['id9']){
    $title9  = htmlentities(mysqli_real_escape_string($connect, $_POST['id9']));
}
else{ echo("Введены некорректные данные");}

mysqli_query($connect, "INSERT INTO `Киносеансы` (`id`, `id фильма`, `id кинозала`, `Дата и время начала показа`, `Количество мест`, `Количество занятых мест`) VALUES (NULL, '$title8', '$title9', '$title10', '$title11', '$title12')");
header('Location: ../films.php');
?>
