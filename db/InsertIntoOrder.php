<?php 
include "db.php";
// get content from form

$SID = $_POST["Supplier"];
$PID = $_POST["PubID"];
$Date = $_POST["Date"];
$TCost = $_POST["TCost"];
// SQL Insert using variable names


mysql_query("INSERT INTO Orders (Supplier_ID, Pub_ID, Date, Total_Cost) VALUES ('$SID', '$PID', '$Date', '$TCost')", $db);

mysql_close($db);
?>