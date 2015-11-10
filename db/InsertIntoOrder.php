<?php 
include "db.php";
// get content from form
$OID = (int) $_POST["Orderid"];
$SID = $_POST["Supplier"];
$PID = $_POST["Pubid"];
$Date = $_POST["Date"];
$TCost = $_POST["TCost"];
// SQL Insert using variable names
mysql_query("INSERT INTO Orders (Order_ID, Supplier_ID, Pub_ID, Date, Total_Cost) VALUES ('$OID', '$SID', '$PID', '$Date', '$TCost')", $db);

mysql_close($db);
?>