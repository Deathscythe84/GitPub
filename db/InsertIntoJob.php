<?php 
include "db.php";
// get content from form
$JTitle = $_POST["Title"];
$JRate = $_POST["Rate"];
$AceessLevel = $_POST["AccLevel"];
// SQL Insert using variable names
mysql_query("CALL insertJob('$JTitle', '$JRate', '$AceessLevel')", $db);

mysql_close($db);
?>