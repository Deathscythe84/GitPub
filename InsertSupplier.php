<html>
<head>
<?php
include "db/db.php";

?>
</head>
<body>
	<h1>Insert Supplier</h1>
	
	<form name="insertsupp" method="post" action="db/InsertIntoSupp.php">
	
		Supplier_Name: <input type="text" name="Supp_Name" pattern="[A-Za-z\s]+" title="Can only contain letters" required /></br>
		Address1: <input type="text" name="Add1" pattern="[A-Za-z0-9\s]+" title="Can only contain letters and numbers" required /></br>
		Address2: <input type="text" name="Add2" pattern="[A-Za-z\s]+" title="Can only contain letters"/></br>
		Address3: <input type="text" name="Add3" pattern="[A-Za-z\s]+" title="Can only contain letters"/></br>
		City: <input type="text" name="City" pattern="[A-Za-z\s]+" title="Can only contain letters" required /></br>
		Country: <input type="text" name="Country" pattern="[A-Za-z\s]+" title="Can only contain letters" required /></br>
		Postcode: <input type="text" name="PCode" pattern="[A-Za-z0-9]+" title="Can only contain letters and numbers" required /></br>		
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>