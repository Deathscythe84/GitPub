<html>
<head>
<?php
include "db.php";

?>
</head>
<body>
	<h1>Insert Supplier</h1>
	
	<form name="insertsupp" method="post" action="db/InsertIntoSupp.php">
	
		Supplier_Name: <input type="text" name="Supp_Name" /></br>
		Address1: <input type="text" name="Add1" /></br>
		Address2: <input type="text" name="Add2" /></br>
		Address3: <input type="text" name="Add3" /></br>
		City: <input type="text" name="City" /></br>
		Country: <input type="text" name="Country" /></br>
		Postcode: <input type="text" name="PCode" /></br>		
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>