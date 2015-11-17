<?php 
include "db.php";
// get content from form
$CompID = $_POST["ComponentID"];

// SQL Insert using variable names
mysql_query("CALL deleteComp('$CompID')", $db);

mysql_close($db);

?>