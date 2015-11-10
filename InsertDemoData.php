<html>
<head>
<?php
include "db/db.php";


$pubquery = "select Pub_ID,Pub_Name From Pub";
$pubresult = mysql_query($pubquery, $db);
?>
</head>
<body>
	<h1>Insert Demographic Data</h1>
	
	<form name="insertDemoData" method="post" action="db/InsertIntoDemoData.php">
	
		Pub: 	<select name="PubID">
				<option value="0"></option>
				<?php
				
				while($pubrow = mysql_fetch_array($pubresult)){
					echo "<option value=".$pubrow['Pub_ID'].">".$pubrow['Pub_Name']."</option>";
				}
				
				?>
				</select></br>
		Date: <input type="text" name="Date" Placeholder="YYYY-MM-DD" pattern="[0-9].{3}-[0-9].{1}-[0-9].{1}" title="YYYY-MM-DD" /></br>
		Type: <input type="text" name="Type" pattern="[A-Za-z\s]+" title="Can only contain letters" /></br>
		Value: <input type="text" name="Value" pattern="[A-Za-z0-9]+" title="Can only contain letters and numbers" /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>