<html>
<head>
<?php
include "db/db.php";

?>
</head>
<body>
	<h1>Insert Staff Role</h1>
	
	<form name="insertjob" method="post" action="db/InsertIntoJob.php">
	

		Job_Title: <input type="text" name="Title" /></br>
		Job_Rate: <input type="text" name="Rate" /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>