<?php 
include "db.php";
// get content from form
$JTitle = $_POST["Title"];
$JRate = $_POST["Rate"];
// SQL Insert using variable names
mysql_query("CALL insertJob('$JTitle', '$JRate')", $db);

mysql_close($db);
?>