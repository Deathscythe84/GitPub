<?php 
include "db.php";

$SupplierID = (int) $_POST["SuppID"];

// SQL Insert using variable names
$SupplierCompQuery = "select Component_Name, Price From Component Where Supplier_ID =".$SupplierID;
$SupplierCompResult = mysql_query($SupplierCompQuery,$db);
mysql_close($db);


echo "<tr><th>Component</th><th>Price</th></tr>";
while($row = mysql_fetch_array($SupplierCompResult))
{
echo "<tr><td>".$row['Component_Name']."</td><td>".$row['Price']."</td></tr>";
}
?>