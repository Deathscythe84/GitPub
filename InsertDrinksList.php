<html>
<head>
<?php
include "db/db.php";

$pubquery = "select Pub_ID,Pub_Name From Pub";
$pubresult = mysql_query($pubquery, $db);

$drinkquery = "select Drink_ID,Drink_Name From Drink";
$drinkresult = mysql_query($drinkquery, $db);
?>
</head>
<body>
	<h1>Insert Drinks List</h1>
	
	<form name="insertDrinksList" method="post" action="db/InsertIntoDrinkList.php">
	
		Drink ID:<select name="DrinkId">
				<option value="0"></option>
				<?php
				
				while($drinkrow = mysql_fetch_array($drinkresult)){
					echo "<option value=".$drinkrow['Drink_ID'].">".$drinkrow['Drink_Name']."</option>";
				}
				
				?>
				</select></br>
		Pub ID: <select name="PubID">
				<option value="0"></option>
				<?php
				
				while($pubrow = mysql_fetch_array($pubresult)){
					echo "<option value=".$pubrow['Pub_ID'].">".$pubrow['Pub_Name']."</option>";
				}
				
				?>
				</select></br>
		Price: <input type="text" name="Price" pattern="[0-9.]+" title="Can only contain numbers" required /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>