<html>
<head>
<?php
include "db.php";
$query = "Select max(Job_ID) AS NextID From Job";
$result = mysql_query($query, $db);
$ID=0;
while($row = mysql_fetch_array($result)){
$ID = $row["NextID"]+1;}
if($ID==null)
	{$ID=1;}
?>
</head>
<body>
	<h1>Insert Pub</h1>
	
	<form name="insertjob" method="post" action="InsertIntoJob.php">
	
		Job_ID: <input type="text" name="JobID" value="<?php echo$ID;?>" readonly /></br>
		Job_Title: <input type="text" name="Title" /></br>
		Job_Rate: <input type="text" name="Rate" /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>