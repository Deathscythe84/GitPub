<?php 
include "db.php";
// get content from form

$SID = $_POST["Supplier"];
$PID = $_POST["PubID"];
$Date = $_POST["Date"];
$TCost = $_POST["TCost"];
// SQL Insert using variable names


$Row = mysql_query("CALL insertOrders('$SID', '$PID', '$Date', '$TCost', @Return)", $db);

mysql_close($db);
$ID = mysql_fetch_row($Row);

echo "<h3>".$_POST["SupplierName"]."</h3>
		<input type='hidden' id='orderid' value=".$ID[0]." />
		<input type='hidden' id='Supplierid' value=".$SID." />
		<table id='ordercomptable'><tr><th>Component</th><th>Quantity</th></tr></table>";
?>