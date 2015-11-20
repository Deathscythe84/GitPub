<?php 
include "db.php";

$DrinkID = (int) $_POST["DrinkID"];

// SQL Insert using variable names

$DrinkCompQuery = "select * from drinkNameQuant where did =" .$DrinkID;

//$DrinkCompQuery = "select c.Component_Name, d.Quantity From Component c INNER JOIN Drink_Component d ON d.Component_ID = c.Component_ID Where Drink_ID =".$DrinkID;
$DrinkCompResult = mysql_query($DrinkCompQuery,$db);
mysql_close($db);


echo "<tr><th>Component</th><th>Quantity</th></tr>";
while($row = mysql_fetch_array($DrinkCompResult))
{
echo "<tr><td>".$row['Component_Name']."</td><td>".$row['Quantity']."</td></tr>";
}
?>