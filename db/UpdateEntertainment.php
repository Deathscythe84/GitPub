<?php 
include "db.php";
// get content from form

$PID = $_POST["Pub_ID"];
$EType = $_POST["Enter_Type"];
$EName = $_POST["Enter_Name"];
$ECost = $_POST["Enter_Cost"];
$CDur = $_POST["Cost_Duration"];
$EID = $_POST["Enter_ID"];

// SQL Insert using variable names
mysql_query("CALL updateEntertainment('$PID','$EType','$EName','$ECost','$CDur','$EID')", $db);
mysql_close($db);
?>