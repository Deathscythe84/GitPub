<html>
<head>
<?php
include "db.php";

?>
</head>
<body>
	<h1>Insert Drinks List</h1>
	
	<form name="insertDrinksList" method="post" action="InsertIntoDrinksList.php">
	
		Drink ID: <input type="text" name="DrinkId" /></br>
		Pub ID: <input type="text" name="PubId" /></br>
		Price: <input type="text" name="Price" /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>