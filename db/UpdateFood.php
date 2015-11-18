<?php 
include "db.php";
// get content from form

$FName = $_POST["Food_Name"];
$FType = $_POST["Food_Type"];
$Veget = $_POST["Vegetarian"];
$Vegan = $_POST["Vegan"];
$FID = $_POST["Food_ID"];

// SQL Insert using variable names
mysql_query("CALL updateFood('$FName','$FType','$Veget', '$Vegan','$FID')", $db);
mysql_close($db);
?>