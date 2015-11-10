<html>
<head>
<?php
include "db.php";
$query = "Select max(Pub_ID) AS NextID From Pub";
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
	
	<form name="insertbar" method="post" action="InsertIntoPub.php">
	
		Pub_ID: <input type="text" name="Pubid" value="<?php echo$ID;?>" readonly /></br>
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