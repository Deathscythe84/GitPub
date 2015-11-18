<?php 
session_start();

include "db.php";
// get content from form
$PID = $_SESSION["PubID"];
$DID = $_POST["DrinkID"];

// SQL Insert using variable names
mysql_query("CALL deleteDrinkList('$PID','$DID')", $db);

mysql_close($db);

?>