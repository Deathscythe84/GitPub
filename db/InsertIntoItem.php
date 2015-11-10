<?php 
include "db.php";
// get content from form
/*
$OID = (int) $_POST["Orderid"];
$CID = $_POST["Component_ID"];
*/
$Quantity = $_POST["Quantity"];
// SQL Insert using variable names

// How do you handle inserting foreign keys? Won't need user to input them so not sure?
mysql_query("INSERT INTO order_item (Order_ID,Component_ID,Quantity) VALUES ('$OID', '$CID', '$Quantity')", $db);

mysql_close($db);
?>