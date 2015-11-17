<?php 
include "db.php";
// get content from form
$FID = $_POST["FoodID"];

// SQL Insert using variable names
mysql_query("CALL deleteFood('$FID')", $db);

mysql_close($db);

?>