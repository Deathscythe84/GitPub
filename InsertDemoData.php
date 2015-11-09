<html>
<head>
<?php
include "db.php";
$query = "Select max(Demographic_Data_ID) AS NextID From Demographic_Data";
$result = mysql_query($query, $db);
$ID=0;
while($row = mysql_fetch_array($result)){
$ID = $row["NextID"]+1;}
if($ID==null)
	{$ID=1;}

$pubquery = "select Pub_ID,Pub_Name From Pub";
$pubresult = mysql_query($pubquery, $db);
?>
</head>
<body>
	<h1>Insert Pub</h1>
	
	<form name="insertDemoData" method="post" action="InsertIntoDemoData.php">
	
		Demographic_Data_ID: <input type="text" name="Demoid" value="<?php echo$ID;?>" readonly /></br>
		Pub: 	<select name="PubID">
				<option value="0"></option>
				<?php
				
				while($pubrow = mysql_fetch_array($pubresult)){
					echo "<option value=".$pubrow['Pub_ID'].">".$pubrow['Pub_Name']."</option>";
				}
				
				?>
				</select></br>
		Date: <input type="text" name="Date" Placeholder="YYYY-MM-DD" /></br>
		Type: <input type="text" name="Type" /></br>
		Value: <input type="text" name="Value" /></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>