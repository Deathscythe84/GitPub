<?php 
include "db.php";

// SQL Insert using variable names
$Query = "select * From listsuppliers";
$Result = mysql_query($Query,$db);
mysql_close($db);


echo "<option value=''>Select Supplier</option>";
while($row = mysql_fetch_array($Result))
{
echo "<option value=".$row['Supplier_ID'].">".$row['Supplier_Name']."</option>";
}
?>