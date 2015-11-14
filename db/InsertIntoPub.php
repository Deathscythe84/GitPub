<?php 
include "db.php";
// get content from form
$PName = $_POST["Pname"];
$PName = addslashes($PName);
$PAdd1 = $_POST["Padd1"];
$PAdd2 = $_POST["Padd2"];
$PAdd3 = $_POST["Padd3"];
$PCity = $_POST["Pcity"];
$PCountry = $_POST["Pcountry"];
$PPCode = $_POST["Ppcode"];
// SQL Insert using variable names
mysql_query("CALL insertPub('$PName', '$PAdd1', '$PAdd2', '$PAdd3', '$PCity', '$PCountry', '$PPCode')", $db);

mysql_close($db);
?>