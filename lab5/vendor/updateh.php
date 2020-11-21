<?php
require_once '../config/connection.php';

$id=$_POST['id'];
$title6 = $_POST['title6'];
$title7 = $_POST['title7'];

mysqli_query($connect, "UPDATE `Кинозалы` SET `Название зала` = '$title6', `Категория` = '$title7' WHERE `Кинозалы`.`id` = '$id'");
header('Location: ../films.php');
?>