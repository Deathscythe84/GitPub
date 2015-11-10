<?php 
include "db.php";
// get content from form
$CompID = (int) $_POST["CompID"];
$FoodID = (int) $_POST["FoodID"];
$Quant = (int) $_POST["quantity"];

// SQL Insert using variable names
mysql_query("INSERT INTO Food_Component (Food_ID, Component_ID, Quantity) VALUES ('$FoodID', '$CompID', '$Quant')", $db);

mysql_close($db);
?>