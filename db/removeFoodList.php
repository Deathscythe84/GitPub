<?php 
session_start();

include "db.php";
// get content from form
$PID = $_SESSION["PubID"];
$FID = $_POST["FoodID"];

// SQL Insert using variable names
mysql_query("CALL deleteFoodList('$PID','$FID')", $db);

mysql_close($db);

?>