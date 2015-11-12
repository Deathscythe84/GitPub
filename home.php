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
							<h3>A Content Title!</h3> <!--Content Title goes here!-->
						</div>
					</div>
					<div class="row">
						<div id="contentLeft" class="one-half column"> <!--Display your content in this section-->
							<p>
								The proposed legislation, which will have to pass votes in both houses of Parliament, would order communications companies, such as broadband firms, to hold basic details of the services that someone has accessed online - something that has been repeatedly proposed but never enacted.
							</p>
							<p>
								This duty would include forcing firms to hold a schedule of which websites someone visits and the apps they connect to through computers, smartphones, tablets and other devices.
							</p>
						</div>
						<div id="contentRight" class="one-half column"> <!--Display your content in this section-->
							<p>
								The proposed legislation, which will have to pass votes in both houses of Parliament, would order communications companies, such as broadband firms, to hold basic details of the services that someone has accessed online - something that has been repeatedly proposed but never enacted.
							</p>
							<p>
								This duty would include forcing firms to hold a schedule of which websites someone visits and the apps they connect to through computers, smartphones, tablets and other devices.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>