<html>
<head>
<?php
include "db/db.php";

$foodquery = "select Food_ID,Food_Name From Food";
$foodresult = mysql_query($foodquery, $db);

$compquery = "select Component_ID,Component_Name From Component";
$compresult = mysql_query($compquery, $db);
	
	?>
</head>
<body>
	<h1>Insert Food Component</h1>

	
	<form name="insertfoodcomp" method="post" action="db/InsertIntoFoodComponent.php">
	
		Component_ID:  	<select name="CompID">
						<option value="0"></option>
						<?php
						while($comprow = mysql_fetch_array($compresult)){
							echo "<option value=".$comprow['Component_ID'].">".$comprow['Component_Name']."</option>";
						}
						?>
						</select></br>
				
		Food_ID: 		<select name="FoodID">
						<option value="0"></option>
						<?php
						while($foodrow = mysql_fetch_array($foodresult)){
							echo "<option value=".$foodrow['Food_ID'].">".$foodrow['Food_Name']."</option>";
						}
						?>
						</select></br>
		
		
		Quantity: <input type="text" name="quantity" /></br>
		
		<input type="submit" value="Insert" />
	</form>
</body>
</html>

