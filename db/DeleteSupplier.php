 <?php 
include "db.php";
// get content from form
$SupID= $_POST["SuppID"];

// SQL Insert using variable names
mysql_query("CALL deleteSupplier('$SupID')", $db);

mysql_close($db);

?>