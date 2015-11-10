<html>
<head>
<?php
include "db/db.php";

$orderquery = "select Order_ID From Orders";
$orderresult = mysql_query($orderquery, $db);

$componentquery = "select Component_ID,Component_Name From Component";
$componentresult = mysql_query($componentquery, $db);

?>
</head>
<body>
	<h1>Insert Order Item</h1>
	
	<form name="insertOrderItem" method="post" action="db/InsertIntoOrderItem.php">
	
		Order: 	<select name="OrderID">
				<option value="0"></option>
				<?php
				
				while($ordersrow = mysql_fetch_array($orderresult)){
					echo "<option value=".$ordersrow['Order_ID'].">".$ordersrow['Order_ID']."</option>";
				}
				?>
				</select></br>
		
		Component: 	<select name="ComponentID">
				<option value="0"></option>
				<?php
				
				while($Componentrow = mysql_fetch_array($componentresult)){
					echo "<option value=".$Componentrow['Component_ID'].">".$Componentrow['Component_Name']."</option>";
				}
				?>
				</select></br>
		Quantity: <input type="text" name="Quantity" /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>