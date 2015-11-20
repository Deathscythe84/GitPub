<?php 
session_start();
 
include "db.php";

$PID = $_SESSION["PubID"];

// SQL Insert using variable names
$FoodListQuery = "Select * From foodmenu Where Pub_ID = $PID";
$FoodListResult = mysql_query($FoodListQuery,$db);
mysql_close($db);


echo "<tr><th>Item</th><th>Price</th></tr>";
while($row = mysql_fetch_array($FoodListResult))
{
echo "<tr><td>".$row['Food_Name']."</td><td>".$row['Price']."</td></tr>";
}
?>