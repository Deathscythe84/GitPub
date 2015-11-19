<?php 
include "db.php";

// SQL Insert using variable names
$DrinkQuery = "select * from listdrinks";
$DrinkResult = mysql_query($DrinkQuery,$db);
mysql_close($db);


echo "<option value=''></option>";
while($row = mysql_fetch_array($DrinkResult))
{
echo "<option value=".$row['DrinkID'].">".$row['DrinkName']."</option>";
}
?>