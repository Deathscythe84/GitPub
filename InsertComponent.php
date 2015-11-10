<html>
<head>
<?php
include "db/db.php";

	
$squery = "select Supplier_ID,Supplier_Name From Supplier";
$sresult = mysql_query($squery, $db);	

	?>
</head>
<body>
	<h1>Insert Component</h1>
	
	<form name="insertcomp" method="post" action="db/InsertIntoComponent.php">
	
		Component_Name: <input type="text" name="CName" pattern="[A-Za-z\s]+" title="Can only contain letters" required/></br>
		Supplier_ID:  	<select name="SuppID">
						<option value="0"></option>
						<?php
						while($srow = mysql_fetch_array($sresult)){
							echo "<option value=".$srow['Supplier_ID'].">".$srow['Supplier_Name']."</option>";
						}
						?>
						</select></br>

						
		Price: <input type="number" name="price" step="0.01" pattern="[0-9]+" title="Can only contain letters" required /></br>
		
						<input type="submit" value="Insert" />
	</form>
</body>
</html>

