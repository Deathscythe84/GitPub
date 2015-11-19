<?php 
session_start();
include "db.php";

$SID = $_SESSION["UserID"];

// SQL Insert using variable names
$Query = "select * From listpersonaldetails Where Staff_ID =".$SID;
$result = mysql_query($Query,$db);
mysql_close($db);

$row = mysql_fetch_row($result);

for($i=1;$i<mysql_num_fields($result);$i++)
{
	echo "<tr><td>".mysql_field_name($result,$i)."</td><td>".$row[$i]."</td></tr>";
}
?>