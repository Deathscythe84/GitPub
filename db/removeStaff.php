<?php 
include "db.php";
// get content from form
$SID = $_POST["StaffID"];

// SQL Insert using variable names
mysql_query("CALL deleteStaff('$SID')", $db);

mysql_close($db);

?>