<html>
<head>
<?php
include "db/db.php";


$pubquery = "select Pub_ID,Pub_Name From Pub";
$pubresult = mysql_query($pubquery, $db);

$suppquery = "select Supplier_ID,Supplier_Name From Supplier";
$suppresult = mysql_query($suppquery, $db);

?>
</head>
<body>
	<h1>Insert Order</h1>
	
	<form name="insertorder" method="post" action="db/InsertIntoOrder.php">
	
		Supplier: 	<select name="Supplier">
				<option value="0"></option>
				<?php
				
				while($supprow = mysql_fetch_array($suppresult)){
					echo "<option value=".$supprow['Supplier_ID'].">".$supprow['Supplier_Name']."</option>";
				}
				?>
				</select></br>
		Pub: 	<select name="PubID">
				<option value="0"></option>
				<?php
				
				while($pubrow = mysql_fetch_array($pubresult)){
					echo "<option value=".$pubrow['Pub_ID'].">".$pubrow['Pub_Name']."</option>";
				}
				?>
				</select></br>
		Date: <input type="text" name="Date" Placeholder="YYYY-MM-DD" pattern="[0-9].{3}-[0-9].{1}-[0-9].{1}" title="YYYY-MM-DD" required /></br>
		Total_Cost: <input type="text" name="TCost" pattern="[0-9.]+" title="Can only contain numbers" required/></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>