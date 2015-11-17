<?php 
include "db.php";
// get content from form
$FName = $_POST["Fname"];
$FName = addslashes($FName);
$FType = $_POST["Ftype"];

$FVeget = $_POST["FVeget"];
$FVegan = $_POST["FVegan"];

// SQL Insert using variable names
$Row=mysql_query("CALL insertFood('$FName', '$FType', '$FVeget', '$FVegan', @Return)", $db);

mysql_close($db);

$ID = mysql_fetch_row($Row);
echo "	<h3>".$FName."</h3>
		<input type='hidden' id='foodid' value=".$ID[0]." />
		<table id='foodcomptable'><tr><th>Component</th><th>Quantity</th></tr></table>";
?>