<?php 
include "db.php";
// get content from form
$OID = $_POST["OrderID"];
$CID = $_POST["ComponentID"];

// SQL Insert using variable names
mysql_query("CALL deleteOrderItem('$OID','$CID')", $db);

mysql_close($db);

include "UpdateOrderComponentTable.php"
?>