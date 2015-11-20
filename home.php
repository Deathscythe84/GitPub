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
					<li class="navOption"><a href="home.php">Home</a></li>

					<li class="navOption">
						<a href="#">Add</a>
						<ul>
							<li class="subOption"><a href="#">Sub 1</a></li>
							<li class="subOption"><a href="#">Sub 2</a></li>
							<li class="subOption"><a href="#">Sub 3</a></li>
							<li class="subOption"><a href="#">Sub 4</a></li>
						</ul>
					</li>

					<li class="navOption">
						<a href="#">View</a>
						<ul>
							<li class="subOption"><a href="#">Sub 1</a></li>
							<li class="subOption"><a href="#">Sub 2</a></li>
							<li class="subOption"><a href="#">Sub 3</a></li>
							<li class="subOption"><a href="#">Sub 4</a></li>
						</ul>
					</li>

					<li class="navOption">
						<a href="index.php">Logout</a>
					</li>
				</ul>
				<img class="navDecor" src="images/octo.png">
			</div>

			<!-- Page Content -->
			<div id="content" class="ten columns">
				<div class="container">
					<div class="row">
						<div id="homeShowcase" class="twelve columns">
							<h1>
							</h1> <!--Content Title goes here!-->
						</div>
					</div>
					<div class="row">
						<div class=""id="homeContent" class="one-half column"> <!--Display your content in this section-->
						<h1></h1>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>