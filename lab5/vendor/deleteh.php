<?php
require_once '../config/connection.php';

$id=$_GET['id'];
mysqli_query($connect, "DELETE FROM `Кинозалы` WHERE `Кинозалы`.`id` = '$id'");
mysqli_query($connect,"DELETE FROM `Киносеансы` WHERE `Киносеансы`.`id кинозала` = '$id'");
header('Location: ../films.php');
?>