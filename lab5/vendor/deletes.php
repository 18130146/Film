<?php
require_once '../config/connection.php';
$id=$_GET['id'];

mysqli_query($connect,"DELETE FROM `Киносеансы` WHERE `Киносеансы`.`id` = '$id'");
header('Location: ../films.php');
?>
