<?php 
include "db.php";
// get content from form
$SID = $_POST["SupplierID"];

// SQL Insert using variable names
mysql_query("CALL deleteSupplier('$SID')", $db);

mysql_close($db);

?>