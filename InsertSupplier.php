<?php 
session_start();

// if($_SESSION["Login"]==false)
// {
	// header('Location:index.php');
// }
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
							<h3>Insert Supplier</h3> <!--Content Title goes here!-->
						</div>
					</div>
					<div class="row">
						<form id="insertsupp" method="post" action="javascript:addSupplier()">
							<div id="contentLeft" class="one-half column"> <!--Display your content in this section-->
									<label for="Supp_Name">Supplier Name:</label>
									<input type="text" id="Supp_Name" pattern="[A-Za-z\s']+" title="Can only contain letters" required />
									<label for="Add1">Address 1:</label>
									<input type="text" id="Add1" pattern="[A-Za-z0-9\s]+" title="Can only contain letters and numbers" required />
									<label for="Add2">Address 2:</label>
									<input type="text" id="Add2" pattern="[A-Za-z\s]+" title="Can only contain letters"/>
									<label for="Add3">Address 3:</label>
									<input type="text" id="Add3" pattern="[A-Za-z\s]+" title="Can only contain letters"/>
							</div>
							<div id="contentRight" class="one-half column"> <!--Display your content in this section-->
								<label for="City">City:</label>
								<input type="text" id="City" pattern="[A-Za-z\s]+" title="Can only contain letters" required />
								<label for="Country">Country:</label>
								<input type="text" id="Country" pattern="[A-Za-z\s]+" title="Can only contain letters" required />
								<label for="PCode">Postcode:</label>
								<input type="text" id="PCode" pattern="[A-Za-z0-9]+" title="Can only contain letters and numbers" required />
								</br></br><input type="submit" value="Insert" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>