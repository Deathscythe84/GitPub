<html>
<head>
<?php
include "db.php";
$query = "Select max(Drink_Id) AS NextID From Drink";
$result = mysql_query($query, $db);
$ID=0;
while($row = mysql_fetch_array($result)){
$ID = $row["NextID"]+1;}
if($ID==null)
	{$ID=1;}
?>
</head>
<body>
	<h1>Insert Drink</h1>
	
	<form name="insertDrink" method="post" action="InsertIntoDrink.php">
	
		DrinkID: <input type="text" name="DrinkId" value="<?php echo$ID;?>" readonly /></br>
		Drink Name: <input type="text" name="DrinkName" /></br>
		Drink Type: <input type="text" name="DrinkType" /></br>
		Percentage of Alcohol: <input type="text" name="PCAlcohol" /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</body>
</html>