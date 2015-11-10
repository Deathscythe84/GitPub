<?php 
include "db.php";
// get content from form
$PID = (int) $_POST["Pubid"];
$PName = $_POST["Pname"];
$PAdd1 = $_POST["Padd1"];
$PAdd2 = $_POST["Padd2"];
$PAdd3 = $_POST["Padd3"];
$PCity = $_POST["Pcity"];
$PCountry = $_POST["Pcountry"];
$PPCode = $_POST["Ppcode"];
// SQL Insert using variable names
mysql_query("INSERT INTO Pub (Pub_ID, Pub_Name, Address1, Address2, Address3, City, Country, Postcode) VALUES ('$PID', '$PName', '$PAdd1', '$PAdd2', '$PAdd3', '$PCity', '$PCountry', '$PPCode')", $db);

mysql_close($db);
?>