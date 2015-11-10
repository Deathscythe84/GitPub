<?php 
include "db.php";
// get content from form
$DID = (int) $_POST["DrinkId"];
$PID = $_POST["PubID"];
$Price = $_POST["Price"];

// SQL Insert using variable names
mysql_query("INSERT INTO Drinks_List (Pub_ID, Drink_ID, Price) VALUES ('$PID', '$DID', '$Price')", $db);

mysql_close($db);
?>