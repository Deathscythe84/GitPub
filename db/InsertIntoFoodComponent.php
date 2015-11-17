<?php 
include "db.php";
// get content from form
$CompID = (int) $_POST["CompID"];
$FoodID = (int) $_POST["FoodID"];
$Quant = (int) $_POST["quantity"];

// SQL Insert using variable names
mysql_query("CALL insertFoodComp('$FoodID', '$CompID', '$Quant')", $db);

mysql_close($db);
include "UpdateFoodComponentTable.php";
?>