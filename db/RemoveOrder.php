<?php 
include "db.php";
// get content from form
$OID = $_POST["OrderID"];

// SQL Insert using variable names
mysql_query("CALL deleteOrders('$OID')", $db);

mysql_close($db);

?>