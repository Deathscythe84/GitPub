<?php 
include "db.php";

$SupplierID = (int) $_POST["SuppID"];

// SQL Insert using variable names
$SupplierCompQuery = "select Component_ID, Component_Name From Component Where Supplier_ID =".$SupplierID;
$SupplierCompResult = mysql_query($SupplierCompQuery,$db);
mysql_close($db);


echo "<option value=''>Components</option>";
while($row = mysql_fetch_array($SupplierCompResult))
{
echo "<option value=".$row['Component_ID'].">".$row['Component_Name']."</option>";
}
?>