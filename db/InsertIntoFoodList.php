<?php 
session_start();

include "db.php";
// get content from form
$FID = (int) $_POST["FoodId"];
$PID = $_SESSION["PubID"];
$Price = floatval($_POST["Price"]);

// SQL Insert using variable names
mysql_query("CALL insertFoodList('$PID', '$FID', '$Price')", $db);

mysql_close($db);
?>