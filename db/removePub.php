<?php 
include "db.php";
// get content from form
$PID = $_POST["PubID"];

// SQL Insert using variable names
mysql_query("CALL deletePub('$PID')", $db);

mysql_close($db);

?>