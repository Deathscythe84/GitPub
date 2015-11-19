<?php 
session_start();

if($_SESSION["Login"]==false)
{
	header('Location:index.php');
}
?>
<!DOCTYPE HTML5>
<html lang="en">
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
	window.onload= function () 
	{
		GetUpdateStaffForm();
		GetStaffDetails();
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
							<h3>Update Details</h3> <!--Content Title goes here!-->
						</div>
					</div>
					<div class="row">
						<div id="contentLeft" class="one-half column"> <!--Display your content in this section-->
							<table id="tableStaffDetails"></table>
							<button onclick="$('#contentRight').show();">Update</button>
						</div>
						<div id="contentRight" hidden class="one-half column"> <!--Display your content in this section-->
							<form id="insertstaff" method="post" action="javascript:UpdateStaff()">

								<input type="text" id="FName" Placeholder="First Name" pattern="[A-Za-z]+" title="Can only contain letters" required />
								<input type="text" id="SName" Placeholder="Surname" pattern="[A-Za-z]+" title="Can only contain letters" required />
								<input type="date" id="DOB" Placeholder="DOB" pattern="[0-9].{3}-[0-9].{1}-[0-9].{1}" title="YYYY-MM-DD"/>
								<input type="text" id="Address" Placeholder="Address" pattern="[A-Za-z0-9\s]+" title="Can only contain letters" />
								<input type="text" id="City" Placeholder="City" pattern="[A-Za-z]+" title="Can only contain letters" />
								<input type="text" id="Postcode" Placeholder="Postcode" pattern="[A-Za-z0-9]+" title="Can only contain letters and numbers" />
								<input type="text" id="Sortcode" Placeholder="Sort Code" pattern="[0-9].{5}" title="Must contain 6 numbers" />
								<input type="text" id="AccNumber" Placeholder="AccNumber" pattern="[0-9].{7}" title="Must contain 8 numbers" />
								
								</br><input type="submit" value="Update" />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>