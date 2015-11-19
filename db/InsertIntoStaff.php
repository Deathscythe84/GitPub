<?php 
include "db.php";
// get content from form
$PID = $_POST["PubID"];
$JID = $_POST["JobID"];
$FName = $_POST["FName"];
$SName = $_POST["SName"];
$DOB = $_POST["DOB"];
$Address = $_POST["Address"];
$City = $_POST["City"];
$PostCode = $_POST["Postcode"];
$StartDate = $_POST["StartDate"];
$Sortcode = sprintf( '%06d', $_POST["Sortcode"]);
$AccNumber = sprintf( '%08d', $_POST["AccNumber"]);
$Password = $_POST["Password"];

// SQL Insert using variable names
$row = mysql_query("CALL insertStaff('$PID', '$JID', '$FName', '$SName', '$DOB', '$Address', '$City', '$PostCode', '$StartDate', '$Sortcode', '$AccNumber', '$Password', @return)", $db);

mysql_close($db);
$ID = mysql_fetch_row($row);
echo "User ".$FName." ".$SName." Is Assigned ID: ".$ID[0];
?>