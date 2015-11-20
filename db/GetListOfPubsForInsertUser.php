<?php 
session_start();
 
include "db.php";
// get content from form

$PID = $_SESSION["PubID"];

if($PID!=0)
{
	echo "<option value='$PID'>Pub</option>";
}
else
	{
	$pubquery = "select * From viewpub";
	$pubresult = mysql_query($pubquery, $db);
	mysql_close($db);

	echo "<option value=''>Select Pub</option>";
	while($row = mysql_fetch_array($pubresult))
	{
		echo "<option value=".$row['Pub_ID'].">".$row['Pub_Name']."</option>";
	}
}
?>