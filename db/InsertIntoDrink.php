<?php 
include "db.php";
// get content from form
$DName = $_POST["DrinkName"];
$DName = addslashes($DName);
$DType = $_POST["DrinkType"];
$PAlcohol = $_POST["PCAlcohol"];

// SQL Insert using variable names
mysql_query("INSERT INTO Drink (Drink_Name, Drink_Type, PC_Alcohol) VALUES ('$DName', '$DType', '$PAlcohol')", $db);
$ID = mysql_insert_id();
mysql_close($db);


echo "	<h3>".$DName."</h3>
		<input type='hidden' id='drinkid' value=".$ID." />
		<table id='drinkcomps'><tr><th>Component</th><th>Quantity</th></tr></table>";
?>