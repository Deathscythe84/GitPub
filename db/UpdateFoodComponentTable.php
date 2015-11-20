<?php 
include "db.php";

$FoodID = (int) $_POST["FoodID"];

// SQL Insert using variable names

$FoodCompQuery = "select * from foodNameQuant where fid =" .$FoodID;

//$FoodCompQuery = "select c.Component_Name, d.Quantity From Component c INNER JOIN Food_Component d ON d.Component_ID = c.Component_ID Where Food_ID =".$FoodID;
$FoodCompResult = mysql_query($FoodCompQuery,$db);
mysql_close($db);


echo "<tr><th>Component</th><th>Quantity</th></tr>";
while($row = mysql_fetch_array($FoodCompResult))
{
echo "<tr><td>".$row['Component_Name']."</td><td>".$row['Quantity']."</td></tr>";
}
?>