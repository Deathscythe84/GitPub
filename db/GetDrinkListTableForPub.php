<?php 
session_start();
 
include "db.php";

$PID = $_SESSION["PubID"];

// SQL Insert using variable names
$DrinkListQuery = "Select F.Drink_Name, FL.Price From Drink F inner Join Drinks_List FL ON F.Drink_ID = FL.Drink_ID Where FL.Pub_ID = $PID";
$DrinkListResult = mysql_query($DrinkListQuery,$db);
mysql_close($db);


echo "<tr><th>Item</th><th>Price</th></tr>";
while($row = mysql_fetch_array($DrinkListResult))
{
echo "<tr><td>".$row['Drink_Name']."</td><td>".$row['Price']."</td></tr>";
}
?>