<?php 
include "db.php";

// SQL Insert using variable names
$FoodQuery = "select * from listfood";
$FoodResult = mysql_query($FoodQuery,$db);
mysql_close($db);


echo "<option value=''></option>";
while($row = mysql_fetch_array($FoodResult))
{
echo "<option value=".$row['FoodID'].">".$row['FoodName']."</option>";
}
?>