<?php 
include "db.php";
// get content from form
$OID = $_POST["OrderID"];
$CID = $_POST["ComponentID"];

// SQL Insert using variable names
mysql_query("CALL deleteOrderItem('$OID','$CID')", $db);
$Total = mysql_query("CALL GetOrderTotal('$OID')",$db);
$row=mysql_fetch_row($Total)[0];
if($row==null)$row=0;
mysql_close($db);
include "db.php";

mysql_query("CALL updateOrder('$row','$OID')", $db);

mysql_close($db);

include "UpdateOrderComponentTable.php"
?>