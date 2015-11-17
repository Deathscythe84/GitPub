<?php 
include "db.php";

// SQL Insert using variable names
$FoodQuery = "select Food_ID, Food_Name From Food";
$FoodResult = mysql_query($FoodQuery,$db);
mysql_close($db);


echo "<option value=''></option>";
while($row = mysql_fetch_array($FoodResult))
{
echo "<option value=".$row['Food_ID'].">".$row['Food_Name']."</option>";
}
?>