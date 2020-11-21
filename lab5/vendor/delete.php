<?php
require_once '../config/connection.php';

$id=$_GET['id'];

mysqli_query($connect, "DELETE FROM `Фильмы` WHERE `Фильмы`.`id` = '$id'");
mysqli_query($connect,"DELETE FROM `Киносеансы` WHERE `Киносеансы`.`id фильма` = '$id'");
header('Location: ../films.php');
?>