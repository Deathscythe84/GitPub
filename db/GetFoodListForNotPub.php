<?php 
session_start();
 
include "db.php";
// get content from form

$PID = $_SESSION["PubID"];

// SQL Insert using variable names
$FoodListQuery = "select Food_ID,Food_Name From Food where Food_ID Not IN (Select Food_ID From Food_List Where Pub_ID =".$PID.")";
$FoodListResult = mysql_query($FoodListQuery,$db);
mysql_close($db);

echo "<option value=''>Select Item</option>";
while($row = mysql_fetch_array($FoodListResult))
{
echo "<option value=".$row['Food_ID'].">".$row['Food_Name']."</option>";
}
?>