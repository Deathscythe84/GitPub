<?php 
include "db.php";
// get content from form
$DID = $_POST["DrinkID"];

// SQL Insert using variable names
mysql_query("Delete From Drink Where Drink_ID =".$DID, $db);

mysql_close($db);

?>