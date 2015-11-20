<?php 
session_start();

if($_SESSION["Login"]==false)
{
	header('Location:index.php');
}
?>
<!DOCTYPE HTML5>
<html>
<head>
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
	<script>
	window.onload=function()
	{
		getPubsForInsertStaff();
		getJobsForInsertStaff();
		GetMenu();
	}
	</script>
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
						<form id="insertstaff" method="post" action="javascript:InsertStaff()">
							<div id="contentLeft" class="one-half column"> <!--Display your content in this section-->
								<label for="PubID">Pub:</label>
								<select id="PubID" required>
								</select>

								<label for="JobID">Job:</label>
								<select required id="JobID">
								</select>

								<label for="FName">First Name:</label>
								<input type="text" id="FName" pattern="[A-Za-z]+" title="Can only contain letters" required />
								<label for="SName">Surname:</label>
								<input type="text" id="SName" pattern="[A-Za-z]+" title="Can only contain letters" required />
								<label for="DOB">Date of Birth:</label>
								<input type="date" id="DOB" Placeholder="YYYY-MM-DD" pattern="[0-9].{3}-[0-9].{1}-[0-9].{1}" title="YYYY-MM-DD"/>
								<!-- Should we maybe have 3 Address fields? -->
								<label for="Address">Address:</label>
								<input type="text" id="Address" pattern="[A-Za-z0-9\s]+" title="Can only contain letters" />
								
							</div>
							<div id="contentRight" class="one-half column"> <!--Display your content in this section-->
								<label for="City">City:</label>
								<input type="text" id="City" pattern="[A-Za-z]+" title="Can only contain letters" />
								<label for="Postcode">Postcode:</label>
								<input type="text" id="Postcode" pattern="[A-Za-z0-9]+" title="Can only contain letters and numbers" />
								<label for="StartDate">Start Date:</label>
								<input type="date" id="StartDate" Placeholder="YYYY-MM-DD" pattern="[0-9].{3}-[0-9].{1}-[0-9].{1}" title="YYYY-MM-DD"/>
								<label for="Sortcode">Sort Code:</label>
								<input type="text" id="Sortcode" pattern="[0-9].{5}" title="Must contain 6 numbers" />
								<label for="AccNumber">Account Number:</label>
								<input type="text" id="AccNumber" pattern="[0-9].{7}" title="Must contain 8 numbers" />
								<label for="Password">Password:</label>
								<input type="text" id="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="At least one number, upper and lower case letter, and minimum eight characters"required/>
								</br>
								<input type="submit" value="Insert" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>