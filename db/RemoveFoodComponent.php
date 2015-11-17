<?php 
include "db.php";
// get content from form
$FID = $_POST["FoodID"];
$CompID = $_POST["ComponentID"];

// SQL Insert using variable names
mysql_query("CALL deleteFoodComp('$FID','$CompID')", $db);

mysql_close($db);

?>