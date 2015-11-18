<?php 
session_start();
 
include "db.php";
// get content from form

$PID = $_SESSION["PubID"];

// SQL Insert using variable names
$EntertainmentListQuery = "Select Entertainment_ID, Entertainment_Type From Entertainment Where Pub_ID =".$PID;
$EntertainmentListResult = mysql_query($EntertainmentListQuery,$db);
mysql_close($db);

echo "<option value=''>Select Item</option>";
while($row = mysql_fetch_array($EntertainmentListResult))
{
echo "<option value=".$row['Entertainment_ID'].">".$row['Entertainment_Type']."</option>";
}
?>