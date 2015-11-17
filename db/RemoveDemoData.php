<?php 
include "db.php";
// get content from form
$DemoID = $_POST["DemoID"];

// SQL Insert using variable names
mysql_query("CALL deleteDemoData('$DemoID')", $db);

mysql_close($db);

?>