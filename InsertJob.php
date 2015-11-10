<html>
<head>
<?php
include "db/db.php";

?>
</head>
<body>
	<h1>Insert Staff Role</h1>
	
	<form name="insertjob" method="post" action="db/InsertIntoJob.php">
	

		Job_Title: <input type="text" name="Title" pattern="[A-Za-z\s]+" title="Can only contain letters" required /></br>
		Job_Rate: <input type="text" name="Rate" pattern="[0-9.]+" title="Can only contain numbers" required /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>