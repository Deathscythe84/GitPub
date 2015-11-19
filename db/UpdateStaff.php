<?php 
session_start();
include "db.php";

$SID = $_SESSION["UserID"];

$FName = $_POST["FName"];
$SName = $_POST["SName"];
$DOB = $_POST["DOB"];
$Address = $_POST["Address"];
$City = $_POST["City"];
$PostCode = $_POST["Postcode"];
$Sortcode = sprintf( '%06d', $_POST["Sortcode"]);
$AccNumber = sprintf( '%08d', $_POST["AccNumber"]);


// SQL Insert using variable names
mysql_query("CALL updateStaff('$FName', '$SName', '$DOB', '$Address', '$City', '$PostCode', '$Sortcode', '$AccNumber', '$SID')", $db);
mysql_close($db);
?>