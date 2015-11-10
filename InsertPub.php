<html>
<head>
<?php
include "db.php";

?>
</head>
<body>
	<h1>Insert Pub</h1>
	
	<form name="insertbar" method="post" action="db/InsertIntoPub.php">
	
		Pub Name: <input type="text" name="Pname" /></br>
		Address1: <input type="text" name="Padd1" /></br>
		Address2: <input type="text" name="Padd2" /></br>
		Address3: <input type="text" name="Padd3" /></br>
		City: <input type="text" name="Pcity" /></br>
		Country: <input type="text" name="Pcountry" /></br>
		Postcode: <input type="text" name="Ppcode" /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>