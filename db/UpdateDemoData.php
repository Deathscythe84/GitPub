<?php 
include "db.php";
// get content from form

$PID = $_POST["Pub_ID"];
$DDate = $_POST["Demo_Date"];
$DType = $_POST["Demo_Type"];
$DValue = $_POST["Demo_Value"];
$DID = $_POST["Demo_ID"];

// SQL Insert using variable names
mysql_query("CALL updateDemoDate('$PID','$DDate','$DType','$DValue','$DID')", $db);
mysql_close($db);
?>