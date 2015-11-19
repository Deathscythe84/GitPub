<?php 
include "db.php";

$SuppID = (int) $_POST["SuppID"];

// SQL Insert using variable names
$SupplierDetailsQuery = "select * From supplierdetails Where SuppID =".$SuppID;
$result = mysql_query($SupplierDetailsQuery,$db);
mysql_close($db);

$row = mysql_fetch_row($result);

echo "<input type='text' Placeholder='Supplier Name' id='Supp_Name' pattern='[A-Za-z\s']+' title='Can only contain letters' value=\"".$row[1]."\" required /></br>
<input type='text' Placeholder='Address1' id='Add1' pattern='[A-Za-z0-9\s]+' title='Can only contain letters and numbers' value=\"".$row[2]."\" required /></br>
<input type='text' Placeholder='Address2' id='Add2' pattern='[A-Za-z\s]+' title='Can only contain letters' value=\"".$row[3]."\" /></br>
<input type='text' Placeholder='Address3' id='Add3' pattern='[A-Za-z\s]+' title='Can only contain letters' value=\"".$row[4]."\" /></br>
<input type='text' Placeholder='City' id='City' pattern='[A-Za-z\s]+' title='Can only contain letters' required  value=\"".$row[5]."\" /></br>
<input type='text' Placeholder='Country' id='Country' pattern='[A-Za-z\s]+' title='Can only contain letters' required value=\"".$row[6]."\" /></br>
<input type='text' Placeholder='Postcode' id='PCode' pattern='[A-Za-z0-9]+' title='Can only contain letters and numbers' required value=\"".$row[7]."\" /></br>		

</br><input type='submit' value='Update' />";
?>