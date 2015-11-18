<?php 
include "db.php";
// get content from form

$JTitle = $_POST["Job_Title"];
$PRate = $_POST["Pay_Rate"];
$JobID= $_POST["JobID"];

// SQL Insert using variable names
mysql_query("CALL updateJob('$JTitle','$PRate','$JobID')", $db);
mysql_close($db);
?>