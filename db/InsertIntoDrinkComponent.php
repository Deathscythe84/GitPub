<?php 
include "db.php";
// get content from form
$CompID = (int) $_POST["CompID"];
$DrinkID = (int) $_POST["DrinkID"];
$Quant = (int) $_POST["quantity"];

// SQL Insert using variable names
mysql_query("INSERT INTO Drink_Component (Drink_ID, Component_ID, Quantity) VALUES ('$DrinkID', '$CompID', '$Quant')", $db);
$Compname = "Select Component_Name from Component where Component_ID =".$CompID;
$CompNameRes = mysql_query($Compname,$db);

$row = mysql_fetch_row($CompNameRes);
echo "<tr><td>".$row[0]."</td><td>".$Quant."</td></tr>";
mysql_close($db);
?>