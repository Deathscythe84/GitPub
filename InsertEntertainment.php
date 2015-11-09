<html>
<head>
<?php
include "db.php";
$query = "Select max(Entertainment_ID) AS NextID From Entertainment";
$result = mysql_query($query, $db);
$ID=0;
while($row = mysql_fetch_array($result)){
$ID = $row["NextID"]+1;}
if($ID==null)
	{$ID=1;}
?>
</head>
<body>
	<h1>Insert Entertainment</h1>
	
	<form name="insertEntertainment" method="post" action="InsertIntoEntertainment.php">
	
		Entertainment ID: <input type="text" name="EntertainmentId" value="<?php echo$ID;?>" readonly /></br>
		Pub ID: <input type="text" name="PubId" /></br>
		Entertainment Type: <input type="text" name="EntertainmentType" /></br>
		Entertainment Name: <input type="text" name="EntertainmentName" /></br>
		Entertainment Cost: <input type="text" name="EntertainmentCost" /></br>
		Cost Duration: <input type="text" name="CostDuration" /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>