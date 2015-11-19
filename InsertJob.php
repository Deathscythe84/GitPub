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
						<!--Content Title goes here!-->
						<div id="contentTitle" class="twelve columns">
							<h3>Insert Staff Role</h3>
						</div>
					</div>
					<div class="row">
						<form id="insertjob" method="post" action="javascript:InsertJob()">
							<!--Display your content in this section-->
							<div id="contentLeft" class="one-half column"> 
								<label for="Title">Job Title:</label>
								<input type="text" id="Title" pattern="[A-Za-z\s]+" title="Can only contain letters" required />
								<label for="Rate">Job Rate:</label> 
								<input type="text" id="Rate" pattern="[0-9.]+" title="Can only contain numbers" required />
								<label for="Level">Access Level:</label>
								<select id="AccessLevel" required>
									<option value=""></option>
									<option value=0>1</option>
									<option value=1>2</option>
									<option value=2>3</option>
									<option value=3>4</option>
								</select>
								</br></br>
								<input type="submit" value="Insert" />
							</div>
							<!--Display your content in this section-->
							<div id="contentRight" class="one-half column">
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>