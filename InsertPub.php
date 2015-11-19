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
							<h3>Insert Bar</h3> <!--Content Title goes here!-->
						</div>
					</div>
					<div class="row">
						<form id="insertbar" method="post" action="javascript:InsertPub()">
							<div id="contentLeft" class="one-half column"> <!--Display your content in this section-->
								<label for="Pname">Pub:</label>
								<input type="text" id="Pname" pattern="[A-Za-z\s']+" title="Can only contain letters" required />
								<label for="Padd1">Address 1:</label>
								<input type="text" id="Padd1" pattern="[A-Za-z0-9\s]+" title="Can only contain letters and numbers" required />
								<label for="Padd2">Address 2:</label>
								<input type="text" id="Padd2" pattern="[A-Za-z\s]+" title="Can only contain letters" />
								<label for="Padd3">Address 3:</label>
								<input type="text" id="Padd3" pattern="[A-Za-z\s]+" title="Can only contain letters" />
							</div>
							<div id="contentRight" class="one-half column"> <!--Display your content in this section-->
								<label for="Pcity">City:</label>
								<input type="text" id="Pcity" pattern="[A-Za-z\s]+" title="Can only contain letters" required />
								<label for="Pcountry">Country:</label>
								<input type="text" id="Pcountry" pattern="[A-Za-z\s]+" title="Can only contain letters" required />
								<label for="Pcode">Postcode:</label>
								<input type="text" id="Ppcode" pattern="[A-Za-z0-9]+" title="Can only contain letters and numbers" required />
								</br></br>
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