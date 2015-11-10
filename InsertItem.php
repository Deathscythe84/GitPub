<html>
<head>
<?php
include "db.php";
/*		Shouldn't need this as order_id is no primary key? 

$query = "Select max(Order_ID) AS NextID From Orders";
$result = mysql_query($query, $db);
$ID=0;
while($row = mysql_fetch_array($result)){
$ID = $row["NextID"]+1;}
if($ID==null)
	{$ID=1;}
?>  	*/
</head>
<body>
	<h1>Insert Order Item</h1>
	
	<form name="insertorderitem" method="post" action="db/InsertItem.php">
	
		/*
		Order_ID: <input type="text" name="Orderid" value="<?php echo$ID;?>" readonly /></br>
		Supplier_ID: <input type="text" name="Supplier" /></br>
		*/
		Quantity: <input type="text" name="Quantity" /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>