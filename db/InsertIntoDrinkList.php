<?php 
include "db.php";
// get content from form
$DID = (int) $_POST["DrinkId"];
$PID = $_POST["PubID"];
$Price = $_POST["Price"];

// SQL Insert using variable names
mysql_query("CALL insertDrinkList('$PID', '$DID', '$Price')", $db);

mysql_close($db);
?>