<?php 
include "db.php";
// get content from form

$PID = $_POST["PubID"];
$DDDate = $_POST["Date"];
$DDType = $_POST["Type"];
$DDValue = $_POST["Value"];


// SQL Insert using variable names
mysql_query("INSERT INTO Demographic_Data (Pub_ID, Date, Demographic_Type, Demographic_Value) VALUES ('$PID', '$DDDate', '$DDType', '$DDValue')", $db);

mysql_close($db);
?>