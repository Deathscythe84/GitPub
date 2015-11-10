<?php 
include "db.php";
// get content from form
$FID = (int) $_POST["FoodId"];
$PID = $_POST["PubID"];
$Price = $_POST["Price"];

// SQL Insert using variable names
mysql_query("INSERT INTO Food_List (Pub_ID, Food_ID, Price) VALUES ('$PID', '$FID', '$Price')", $db);

mysql_close($db);
?>