<?php 
include "db.php";
// get content from form
$EID = $_POST["EntertainmentID"];

// SQL Insert using variable names
mysql_query("CALL deleteEntertainment('$EID')", $db);

mysql_close($db);

?>