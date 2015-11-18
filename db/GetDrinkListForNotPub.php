<?php 
session_start();
 
include "db.php";
// get content from form

$PID = $_SESSION["PubID"];

// SQL Insert using variable names
$DrinkListQuery = "select Drink_ID,Drink_Name From Drink where Drink_ID Not IN (Select Drink_ID From Drinks_List Where Pub_ID =".$PID.")";
$DrinkListResult = mysql_query($DrinkListQuery,$db);
mysql_close($db);

echo "<option value=''>Select Item</option>";
while($row = mysql_fetch_array($DrinkListResult))
{
echo "<option value=".$row['Drink_ID'].">".$row['Drink_Name']."</option>";
}
?>