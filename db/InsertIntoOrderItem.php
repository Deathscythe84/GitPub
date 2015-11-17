<?php 
include "db.php";
// get content from form

$OID = $_POST["OrderID"];
$CID = $_POST["ComponentID"];
$QUAN = $_POST["Quantity"];


// SQL Insert using variable names
mysql_query("CALL insertOrderItem('$OID', '$CID', '$QUAN')", $db);
$Total = mysql_query("CALL GetOrderTotal('$OID')",$db);
$row=mysql_fetch_row($Total)[0];
echo $row;
mysql_query("CALL updateOrder('$row','$OID')", $db);
mysql_close($db);

include "UpdateOrderComponentTable.php"
?>