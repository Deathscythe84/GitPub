<html>
<head>
<?php
include "db/db.php";


$pubquery = "select Pub_ID,Pub_Name From Pub";
$pubresult = mysql_query($pubquery, $db);


$jobquery = "select Job_ID,Job_Title From Job";
$jobresult = mysql_query($jobquery, $db);
?>
</head>
<body>
	<h1>Insert Staff Member</h1>
	
	<form name="insertstaff" method="post" action="db/InsertIntoStaff.php">
	

		Pub: 	<select name="PubID">
				<option value="0"></option>
				<?php
				
				while($pubrow = mysql_fetch_array($pubresult)){
					echo "<option value=".$pubrow['Pub_ID'].">".$pubrow['Pub_Name']."</option>";
				}
				?>
				</select></br>
		Job Title: 	<select name="JobID">
					<option value="0"></option>
					<?php
					
					while($jobrow = mysql_fetch_array($jobresult)){
						echo "<option value=".$jobrow['Job_ID'].">".$jobrow['Job_Title']."</option>";
					}
					
					?>
					</select></br>
		First Name:  <input type="text" name="FName" pattern="[A-Za-z]+" title="Can only contain letters" required /></br>
		Second Name:  <input type="text" name="SName" pattern="[A-Za-z]+" title="Can only contain letters" required /></br>
		Date Of Birth:  <input type="date" name="DOB" Placeholder="YYYY-MM-DD" pattern="[0-9].{3}-[0-9].{1}-[0-9].{1}" title="YYYY-MM-DD"/></br>
		Address: <input type="text" name="Address" pattern="[A-Za-z]+" title="Can only contain letters" /></br>
		City: <input type="text" name="City" pattern="[A-Za-z ]+" title="Can only contain letters" /></br>
		Postcode: <input type="text" name="Postcode" pattern="[A-Za-z0-9]+" title="Can only contain letters and numbers" /></br>
		Start Date:  <input type="date" name="StartDate" Placeholder="YYYY-MM-DD" pattern="[0-9].{3}-[0-9].{1}-[0-9].{1}" title="YYYY-MM-DD"/></br>
		Sort Code:  <input type="text" name="Sortcode" pattern="[0-9].{5}" title="Must contain 6 numbers" /></br>
		Account Number:  <input type="text" name="AccNumber" pattern="[0-9].{7}" title="Must contain 8 numbers" /></br>
		Password:  <input type="text" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/></br>
		
		</br>
		<input type="submit" value="Insert" />
	</form>
</body>
</html>