<?php

require_once '../config/connection.php';

$id=$_POST['id'];
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


echo $id." ".$title8." ".$title9." ".$title10." ".$title11." ".$title12;
mysqli_query($connect,"UPDATE `Киносеансы` SET `id фильма` = '$title8', `id кинозала` = '$title9', `Дата и время начала показа` = '$title10', `Количество мест` = '$title11', `Количество занятых мест` = '$title12' WHERE `Киносеансы`.`id` = '$id'" );

header('Location: ../films.php');


?>
