<?php 
include "db.php";
// get content from form

$OID = $_POST["OrderID"];
$CID = $_POST["ComponentID"];
$QUAN = $_POST["Quantity"];


// SQL Insert using variable names
mysql_query("INSERT INTO order_item (Order_ID,Component_ID,Quantity)
			VALUES ('$OID', '$CID', '$QUAN')", $db);

mysql_close($db);
?>