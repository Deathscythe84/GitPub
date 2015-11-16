<html>
<head>
<?php
include "db/db.php";


$pubquery = "select Pub_ID,Pub_Name From Pub";
$pubresult = mysql_query($pubquery, $db);


$jobquery = "select Job_ID,Job_Title From Job";
$jobresult = mysql_query($jobquery, $db);
?>

<title>GitPub!</title>

	<!-- CSS -->
	<link rel="stylesheet" href="css/normalize.css">
  	<link rel="stylesheet" href="css/skeleton.css">
  	<link rel="stylesheet" href="css/animations.css">
  	<link rel="stylesheet" href="css/foundation-icons/foundation-icons.css">
	<link rel="stylesheet" href="css/styles.css">

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/favicon.png">

	<!-- Scripts -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<!-- <script src="js/scripts.js"></script> -->
	<script src="js/AJAX.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div id="titleBar"class="twelve columns">
				<div class="logo">
					<a href="#"><h2>[ GitPub ]</h2></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div id="sideBar" class="two columns">
				<!-- Navigation Options -->
				<ul id="navList">
					<li class="navOption"><a href="#">Home</a></li>
					<li class="navOption"><a href="#">Orders</a></li>
					<li class="navOption"><a href="#">Search</a></li>
					<li class="navOption"><a href="#">Gallery</a></li>
					<li class="navOption"><a href="index.php">Logout</a></li>
				</ul>
			</div>
			<div id="content" class="ten columns">
				<div class="container">
					<div class="row">
						<div id="contentTitle" class="twelve columns">
							<h3>Insert Staff</h3> <!--Content Title goes here!-->
						</div>
					</div>
					<div class="row">
						<form name="insertstaff" method="post" action="db/InsertIntoStaff.php">
							<div id="contentLeft" class="one-half column"> <!--Display your content in this section-->
								<label for="PubID">Pub:</label>
								<select name="PubID">
								<option value="0"></option>
								<?php
								while($pubrow = mysql_fetch_array($pubresult)){
									echo "<option value=".$pubrow['Pub_ID'].">".$pubrow['Pub_Name']."</option>";
								}
								?>
								</select>

								<label for="JobID">Job:</label>
								<select required name="JobID">
								<option value=""></option>
								<?php
								while($jobrow = mysql_fetch_array($jobresult)){
									echo "<option value=".$jobrow['Job_ID'].">".$jobrow['Job_Title']."</option>";
								}
								?>
								</select>

								<label for="FName">First Name:</label>
								<input type="text" name="FName" pattern="[A-Za-z]+" title="Can only contain letters" required />
								<label for="SName">Surname:</label>
								<input type="text" name="SName" pattern="[A-Za-z]+" title="Can only contain letters" required />
								<label for="DOB">Date of Birth:</label>
								<input type="date" name="DOB" Placeholder="YYYY-MM-DD" pattern="[0-9].{3}-[0-9].{1}-[0-9].{1}" title="YYYY-MM-DD"/>
								<!-- Should we maybe have 3 Address fields? -->
								<label for="Address">Address:</label>
								<input type="text" name="Address" pattern="[A-Za-z0-9\s]+" title="Can only contain letters" />
								</br>
								<input type="submit" value="Insert" />
							</div>
							<div id="contentRight" class="one-half column"> <!--Display your content in this section-->
								<label for="City">City:</label>
								<input type="text" name="City" pattern="[A-Za-z]+" title="Can only contain letters" />
								<label for="Postcode">Postcode:</label>
								<input type="text" name="Postcode" pattern="[A-Za-z0-9]+" title="Can only contain letters and numbers" />
								<label for="StartDate">Start Date:</label>
								<input type="date" name="StartDate" Placeholder="YYYY-MM-DD" pattern="[0-9].{3}-[0-9].{1}-[0-9].{1}" title="YYYY-MM-DD"/>
								<label for="Sortcode">Sort Code:</label>
								<input type="text" name="Sortcode" pattern="[0-9].{5}" title="Must contain 6 numbers" />
								<label for="AccNumber">Account Number:</label>
								<input type="text" name="AccNumber" pattern="[0-9].{7}" title="Must contain 8 numbers" />
								<label for="Password">Password:</label>
								<input type="text" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>