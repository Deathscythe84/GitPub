<?php 
include "db.php";
// get content from form

$OrderID = (int) $_POST["OrderID"];
$SID = $_POST["Supplier"];

// SQL Insert using variable names

$CompListQuery = "select * from componentsnotorder where `oid` =".$OrderID." and `SuppID` =".$SID;

//$CompListQuery = "select Component_ID,Component_Name From Component where Supplier_ID =$SID && Component_ID NOT IN (Select Component_ID From Order_Item Where Order_ID =$OrderID)";
$CompListResult = mysql_query($CompListQuery,$db);
mysql_close($db);

echo "<option value=''></option>";
while($comprow = mysql_fetch_array($CompListResult))
{
echo "<option value=".$comprow['CompID'].">".$comprow['CompName']."</option>";
}
?>