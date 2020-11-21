<?php
require_once '../config/connection.php';

$session_id = $_GET['id'];
$session = mysqli_query($connect, "SELECT * FROM `Киносеансы` WHERE `id`='$session_id'"); 
$session = mysqli_fetch_assoc($session);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
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

<h1>Изменение данных о киносеансе</h1>

<form action="updates2.php" method="post">

<input type="hidden" name="id" value="<?= $session['id']?>">

<?php
require_once '../config/connection.php';
  echo "<br> </br>";
$films = mysqli_query($connect,"SELECT * FROM `Фильмы`");


   echo("ID фильма   <select title8='id' name='id8'>");

    echo("<option disabled>Выберите</option>");
     while($row = mysqli_fetch_array($films)){
        echo("<option value='$row[0]'> $row[0] - $row[1]</option>");
     }
  echo "</select>";
  echo "<br> </br>";

$halls = mysqli_query($connect,"SELECT * FROM `Кинозалы`");

   echo("ID кинозала  <select title9='id' name='id9'>");
   
    echo("<option disabled>Выберите</option>");
     while($row2 = mysqli_fetch_array($halls)){
        echo("<option value='$row2[0]'> $row2[0] - $row2[2]</option>");
     }
      echo "</select>";

     ?>
  <p>Дата и время начала показа</p>
  <input id="datetime" type="datetime-local" name="title10" value="<?=$session['Дата и время начала показа'] ?>">
  <p>Количество мест</p>
  <input type="text" name="title11" value="<?=$session['Количество мест'] ?>">
  <p>Количество занятых мест</p>
  <input type="text" name="title12" value="<?=$session['Количество занятых мест'] ?>">
	
<input type="submit" value="Изменить" >
</form>





</body>
</html>