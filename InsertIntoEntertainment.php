<?php 
include "db.php";
// get content from form
$EID = (int) $_POST["EntertainmentId"];
$PID = $_POST["PubId"];
$EType = $_POST["EntertainmentType"];
$EName = $_POST["EntertainmentName"]
$ECost = $_POST["EntertainmentCost"];
$CDur = $_POST["CostDuration"];
// SQL Insert using variable names
mysql_query("INSERT INTO Entertainment (Entertainment_ID, Pub_ID, Entertainment_Type, Entertainment_Name, Entertainment_Cost, Cost_Duration) VALUES ('$EID', '$PID', '$EType', '$EName', '$ECost', '$CDur')", $db);

mysql_close($db);
?>