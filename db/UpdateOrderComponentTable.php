<?php 
include "db.php";

$OrderID = (int) $_POST["OrderID"];

// SQL Insert using variable names



$OrderCompQuery = "select * from updateordercomptable where OID =".$OrderID;
//$OrderCompQuery = "select c.Component_Name, d.Quantity From Component c INNER JOIN Order_Item d ON d.Component_ID = c.Component_ID Where Order_ID =".$OrderID;
$OrderCompResult = mysql_query($OrderCompQuery,$db);
mysql_close($db);


echo "<tr><th>Component</th><th>Quantity</th></tr>";
while($row = mysql_fetch_array($OrderCompResult))
{
echo "<tr><td>".$row['Component_Name']."</td><td>".$row['Quantity']."</td></tr>";
}
?>