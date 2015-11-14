<?php 
include "db.php";
// get content from form
$DName = $_POST["DrinkName"];
$DName = addslashes($DName);
$DType = $_POST["DrinkType"];
$PAlcohol = $_POST["PCAlcohol"];

// SQL Insert using variable names

$Row = mysql_query("CALL insertDrink('$DName', '$DType', '$PAlcohol', @Return)" , $db);
//$ID = mysql_insert_id();
mysql_close($db);

$ID = mysql_fetch_row($Row);
echo "	<h3>".$DName."</h3>
		<input type='hidden' id='drinkid' value=".$ID[0]." />
		<table id='drinkcomptable'><tr><th>Component</th><th>Quantity</th></tr></table>";
?>