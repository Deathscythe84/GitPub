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
$SupID= $_POST["SuppID"];


// SQL Insert using variable names
mysql_query("Update Supplier SET Supplier_Name = '$SName', Address1 = '$SAdd1', Address2 = '$SAdd2', Address3 = '$SAdd3',
	City = '$SCity', Country = '$SCountry', Postcode = '$SCode' Where Supplier_ID =".$SupID, $db);
mysql_close($db);
?>