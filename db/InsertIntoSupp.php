<?php 
include "db.php";
// get content from form

$SName = $_POST["Supp_Name"];
$SName = addslashes($SName);
$SAdd1 = $_POST["Add1"];
$SAdd2 = $_POST["Add2"];
$SAdd3 = $_POST["Add3"];
$SCity = $_POST["City"];
$SCountry = $_POST["Country"];
$SCode = $_POST["PCode"];


// SQL Insert using variable names
mysql_query("CALL insertSupplier ('$SName', '$SAdd1', '$SAdd2', '$SAdd3', '$SCity', '$SCountry', '$SCode')", $db);

mysql_close($db);
?>