<?php 
include "db.php";
// get content from form
$FName = $_POST["Fname"];
$FName = addslashes($FName);
$FType = $_POST["Ftype"];

$FVeget = $_POST["FVeget"];
$FVegan = $_POST["FVegan"];

// SQL Insert using variable names
mysql_query("INSERT INTO Food (Food_Name, Food_Type, Vegetarian, Vegan) VALUES ('$FName', '$FType', '$FVeget', '$FVegan')", $db);

mysql_close($db);
?>