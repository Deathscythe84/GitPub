<?php 
include "db.php";
// get content from form

$SName = $_POST["Supp_Name"];
$SAdd1 = $_POST["Add1"];
$SAdd2 = $_POST["Add2"];
$SAdd3 = $_POST["Add3"];
$SCity = $_POST["City"];
$SCountry = $_POST["Country"];
$SCode = $_POST["PCode"];


// SQL Insert using variable names
mysql_query("INSERT INTO Supplier (Supplier_Name, Address1, Address2, Address3, City, Country, Postcode) VALUES ('$SName', '$SAdd1', '$SAdd2', '$SAdd3', '$SCity', '$SCountry', '$SCode')", $db);

mysql_close($db);
?>