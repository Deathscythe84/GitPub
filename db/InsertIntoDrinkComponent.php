<?php 
include "db.php";
// get content from form
$CompID = (int) $_POST["CompID"];
$DrinkID = (int) $_POST["DrinkID"];
$Quant = (int) $_POST["quantity"];

// SQL Insert using variable names
mysql_query("CALL insertDrinkComp('$DrinkID', '$CompID', '$Quant')", $db);
mysql_close($db);

include "UpdateDrinkComponentTable.php";
?>