<html>
<head>
<?php
include "db/db.php";

$pubquery = "select Pub_ID,Pub_Name From Pub";
$pubresult = mysql_query($pubquery, $db);

$foodquery = "select Food_ID,Food_Name From Food";
$foodresult = mysql_query($foodquery, $db);
?>
</head>
<body>
	<h1>Insert Food List</h1>
	
	<form name="insertFoodList" method="post" action="db/InsertIntoFoodList.php">
	
		Food ID: <select name="FoodId">
				<option value="0"></option>
				<?php
				
				while($foodrow = mysql_fetch_array($foodresult)){
					echo "<option value=".$foodrow['Food_ID'].">".$foodrow['Food_Name']."</option>";
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