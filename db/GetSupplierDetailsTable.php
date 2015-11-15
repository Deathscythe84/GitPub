<?php 
include "db.php";

$SuppID = (int) $_POST["SuppID"];

// SQL Insert using variable names
$SupplierDetailsQuery = "select * From supplier Where Supplier_ID =".$SuppID;
$result = mysql_query($SupplierDetailsQuery,$db);
mysql_close($db);

$row = mysql_fetch_row($result);
for($i=0;$i<mysql_num_fields($result);$i++)
{
	echo "<tr><td>".mysql_field_name($result,$i)."</td><td>".$row[$i]."</td></tr>";
}
?>