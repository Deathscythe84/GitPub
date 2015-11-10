<?php 
include "db.php";
// get content from form
$CompID = (int) $_POST["CompID"];
$DrinkID = (int) $_POST["DrinkID"];
$Quant = (int) $_POST["quantity"];

// SQL Insert using variable names
mysql_query("INSERT INTO Drink_Component (Drink_ID, Component_ID, Quantity) VALUES ('$DrinkID', '$CompID', '$Quant')", $db);

mysql_close($db);
?>