<html>
<head>
<?php
include "db.php";
$query = "Select max(Order_ID) AS NextID From Orders";
$result = mysql_query($query, $db);
$ID=0;
while($row = mysql_fetch_array($result)){
$ID = $row["NextID"]+1;}
if($ID==null)
	{$ID=1;}
?>
</head>
<body>
	<h1>Insert Order</h1>
	
	<form name="insertorder" method="post" action="InsertIntoOrder.php">
	
		Order_ID: <input type="text" name="Orderid" value="<?php echo$ID;?>" readonly /></br>
		Supplier_ID: <input type="text" name="Supplier" /></br>
		Pub_ID: <input type="text" name="Pubid" /></br>
		Date: <input type="text" name="Date" /></br>
		Total_Cost: <input type="text" name="TCost" /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>