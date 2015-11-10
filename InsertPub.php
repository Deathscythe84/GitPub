<html>
<head>
<?php
include "db/db.php";

?>
</head>
<body>
	<h1>Insert Pub</h1>
	
	<form name="insertbar" method="post" action="db/InsertIntoPub.php">
	
		Pub Name: <input type="text" name="Pname" pattern="[A-Za-z\s]+" title="Can only contain letters" required /></br>
		Address1: <input type="text" name="Padd1" pattern="[A-Za-z0-9\s]+" title="Can only contain letters and numbers" required /></br>
		Address2: <input type="text" name="Padd2" /></br>
		Address3: <input type="text" name="Padd3" /></br>
		City: <input type="text" name="Pcity" /></br>
		Country: <input type="text" name="Pcountry" /></br>
		Postcode: <input type="text" name="Ppcode" pattern="[A-Za-z0-9]+" title="Can only contain letters and numbers" required /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>