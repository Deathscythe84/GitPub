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
$Sortcode = $_POST["Sortcode"];
$AccNumber = $_POST["AccNumber"];
$Password = $_POST["Password"];


// SQL Insert using variable names
mysql_query("INSERT INTO Staff (Pub_ID, Job_ID, F_Name, S_Name, DateOfBirth, Address, City, PostCode, Start_Date, Sort_Code, Account_Number, Password)
			VALUES ('$PID', '$JID', '$FName', '$SName', '$DOB', '$Address', '$City', '$PostCode', '$StartDate', '$Sortcode', '$AccNumber', '$Password')", $db);

mysql_close($db);
?>