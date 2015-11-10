<html>
<head>
<?php
include "db.php";

?>
</head>
<body>
	<h1>Insert Food List</h1>
	
	<form name="insertFoodList" method="post" action="InsertIntoFoodList.php">
	
		Food ID: <input type="text" name="foodId" /></br>
		Pub ID: <input type="text" name="PubId" /></br>
		Price: <input type="text" name="Price" /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>