<?php
require_once '../config/connection.php';

$title6 = $_POST['title6'];
$title7 = $_POST['title7'];

$halls = mysqli_query($connect, "INSERT INTO `Кинозалы` (`ID`, `Название зала`, `Категория`) VALUES (NULL, '$title6', '$title7');");
header('Location: ../films.php');
?>