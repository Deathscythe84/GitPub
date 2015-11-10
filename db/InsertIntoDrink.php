<?php 
include "db.php";
// get content from form
$DName = $_POST["DrinkName"];
$DType = $_POST["DrinkType"];
$PAlcohol = $_POST["PCAlcohol"];

// SQL Insert using variable names
mysql_query("INSERT INTO Drink (Drink_Name, Drink_Type, PC_Alcohol) VALUES ('$DName', '$DType', '$PAlcohol')", $db);

mysql_close($db);
?>