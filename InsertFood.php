<html>
<head>
<?php
include "db/db.php";

?>
</head>
<body>
	<h1>Insert Food</h1>
	
	<form name="insertfood" method="post" action="db/InsertIntoFood.php">
	
		Food_Name: <input type="text" name="Fname" pattern="[A-Za-z/s']+" title="Can only contain letters" required /></br>
		Food_Type: <input type="text" name="Ftype" pattern="[A-Za-z]+" title="Can only contain letters" required /></br>
		Is Vegetarian: 	<select name="FVeget"> 
				<option value="0">No</option>
				<option value="1">Yes</option>
				</select>
		</br>
		Is Vegan: <select name="FVegan">
				<option value="0">No</option>
				<option value="1">Yes</option>
				</select>
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>




<!--Create Table `Food` (
`Food_ID` int(11) Not null,
`Food_Name` varchar(50) Default Null,
`Food_Type` varchar(20) Default Null,
`Vegetarian` bool default null,
`Vegan` bool default null,
Primary Key (`Food_ID`)
)-->