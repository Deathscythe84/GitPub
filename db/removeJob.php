<?php 
include "db.php";
// get content from form
$JID = $_POST["JobID"];

// SQL Insert using variable names
mysql_query("CALL deleteJob('$JID')", $db);

mysql_close($db);

?>