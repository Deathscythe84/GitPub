<?php 
include "db.php";
// get content from form
$DID = $_POST["DrinkID"];
$CompID = $_POST["ComponentID"];

// SQL Insert using variable names
mysql_query("CALL deleteDrinkComp('$DID','$CompID')", $db);

mysql_close($db);

?>