<?php 
include "db.php";
// get content from form
$SupID= $_POST["SuppID"];

// SQL Insert using variable names
mysql_query("Delete From Supplier Where Supplier_ID =".$SupID, $db);

mysql_close($db);

?>