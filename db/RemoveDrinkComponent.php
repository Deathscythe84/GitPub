<?php 
include "db.php";
// get content from form
$DID = $_POST["DrinkID"];
$CompID = $_POST["ComponentID"];

// SQL Insert using variable names
mysql_query("Delete From Drink_Component Where Drink_ID =".$DID." && Component_ID =".$CompID, $db);

mysql_close($db);

?>