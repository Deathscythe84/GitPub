<?php 
include "db.php";
// get content from form
$PID = $_POST["PubID"];
$DID = $_POST["DrinkID"];

// SQL Insert using variable names
mysql_query("CALL deleteDrinkList('$PID','$DID')", $db);

mysql_close($db);

?>