<html>
<head>
<?php
include "db/db.php";

$drinkquery = "select Drink_ID,Drink_Name From Drink";
$drinkresult = mysql_query($drinkquery, $db);

$compquery = "select Component_ID,Component_Name From Component";
$compresult = mysql_query($compquery, $db);
	
	?>
</head>
<body>
	<h1>Insert Drink Component</h1>

	
	<form name="insertdrinkcomp" method="post" action="db/InsertIntoDrinkComponent.php">
	
		Component_ID:  	<select name="CompID">
						<option value="0"></option>
						<?php
						while($comprow = mysql_fetch_array($compresult)){
							echo "<option value=".$comprow['Component_ID'].">".$comprow['Component_Name']."</option>";
						}
						?>
						</select></br>
		
		Drink_ID: 		<select name="DrinkID">
						<option value="0"></option>
						<?php
						while($drinkrow = mysql_fetch_array($drinkresult)){
							echo "<option value=".$drinkrow['Drink_ID'].">".$drinkrow['Drink_Name']."</option>";
						}
						?>
						</select></br>
		
		
		Quantity: <input type="text" name="quantity" /></br>
		
		<input type="submit" value="Insert" />
	</form>
</body>
</html>


