<?php 
include "db.php";
// get content from form
$JTitle = $_POST["Title"];
$JRate = $_POST["Rate"];
// SQL Insert using variable names
mysql_query("INSERT INTO Job (Job_Title, Pay_Rate) VALUES ('$JTitle', '$JRate')", $db);

mysql_close($db);
?>