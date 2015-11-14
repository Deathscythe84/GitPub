<?php 
include "db.php";

// SQL Insert using variable names
$DrinkQuery = "select Drink_ID, Drink_Name From Drink";
$DrinkResult = mysql_query($DrinkQuery,$db);
mysql_close($db);


echo "<option value=''></option>";
while($row = mysql_fetch_array($DrinkResult))
{
echo "<option value=".$row['Drink_ID'].">".$row['Drink_Name']."</option>";
}
?>