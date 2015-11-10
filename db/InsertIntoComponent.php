<?php 
include "db.php";
// get content from form

$CName = $_POST["CName"];
$SuppID = (int) $_POST["SuppID"];
$Price = (double) $_POST["price"];

// SQL Insert using variable names
mysql_query("INSERT INTO Component (Component_Name, Supplier_ID, Price) VALUES ('$CName','$SuppID', '$Price')", $db);

mysql_close($db);
?>

