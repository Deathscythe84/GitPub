<?php 
session_start();

include "db.php";
// get content from form

$PID = $_SESSION["PubID"];
$DDDate = $_POST["Date"];
$DDType = $_POST["Type"];
$DDValue = $_POST["Value"];


// SQL Insert using variable names
mysql_query("CALL insertDemoData('$PID', '$DDDate', '$DDType', '$DDValue')", $db);

mysql_close($db);
?>