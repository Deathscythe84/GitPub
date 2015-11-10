<html>
<head>
<?php
include "db/db.php";

?>
</head>
<body>
	<h1>Insert Drink</h1>
	
	<form name="insertDrink" method="post" action="db/InsertIntoDrink.php">
	
		Drink Name: <input type="text" name="DrinkName" pattern="[A-Za-z\s]+" title="Can only contain letters" required /></br>
		Drink Type: <input type="text" name="DrinkType" pattern="[A-Za-z\s]+" title="Can only contain letters" required /></br>
		Percentage of Alcohol: <input type="text" name="PCAlcohol" pattern="[0-9]+" title="Can only contains numbers" required /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</body>
</html>