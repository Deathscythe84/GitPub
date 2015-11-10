<html>
<head>
<?php
include "db/db.php";

$pubquery = "select Pub_ID,Pub_Name From Pub";
$pubresult = mysql_query($pubquery, $db);
?>
</head>
<body>
	<h1>Insert Entertainment</h1>
	
	<form name="insertEntertainment" method="post" action="db/InsertIntoEntertainment.php">

		Pub: 	<select name="PubID">
				<option value="0"></option>
				<?php
				
				while($pubrow = mysql_fetch_array($pubresult)){
					echo "<option value=".$pubrow['Pub_ID'].">".$pubrow['Pub_Name']."</option>";
				}
				
				?>
				</select></br>
		Entertainment Type: <input type="text" name="EntertainmentType" required /></br>
		Entertainment Name: <input type="text" name="EntertainmentName" pattern="[A-Za-z\s]+" title="Can only contain letters" required /></br>
		Entertainment Cost: <input type="text" name="EntertainmentCost" pattern="[0-9.]+" title="Can only contains numbers" required /></br>
		Cost Duration: <input type="text" name="CostDuration" required /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>