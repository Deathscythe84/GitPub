<?php 
include "db.php";
// get content from form

$CName = $_POST["componentName"];
$Price = $_POST["componentPrice"];
$CompID = $_POST["CompID"];

// SQL Insert using variable names
mysql_query("CALL updateComp('$CName','$Price','$CompID')", $db);
mysql_close($db);
?>