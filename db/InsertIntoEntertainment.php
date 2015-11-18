<?php 
session_start();

include "db.php";
// get content from form
$PID = $_SESSION["PubID"];
$EType = $_POST["EntertainmentType"];
$EName = $_POST["EntertainmentName"];
$EName = addslashes($EName);
$ECost = $_POST["EntertainmentCost"];
$CDur = $_POST["CostDuration"];
// SQL Insert using variable names
mysql_query("CALL insertEnter('$PID', '$EType', '$EName', '$ECost', '$CDur')", $db);

mysql_close($db);
?>