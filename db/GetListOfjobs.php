<?php 
session_start();
 
include "db.php";
// get content from form

$AccLev = $_SESSION["AccLev"];

$jobquery = "select * From viewjob Where Access_Level <='$AccLev'";
$jobresult = mysql_query($jobquery, $db);
mysql_close($db);

echo "<option value=''></option>";
while($row = mysql_fetch_array($jobresult))
{
	echo "<option value=".$row['Job_ID'].">".$row['Job_Title']."</option>";
}
?>