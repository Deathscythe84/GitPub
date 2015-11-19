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
		getDrinkListForNotPub();
		getDrinkListForPub();
		getDrinkTableForPub();
		
	};
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
							<h3>Insert Drinks List</h3> <!--Content Title goes here!-->
						</div>
					</div>
					<div class="row">
						<div id="contentLeft" class="one-half column"> <!--Display your content in this section-->
							<form name="insertDrinksList" method="post" action="javascript:InsertDrinkListItem()">
							
							<label for="DrinkId">Drink:</label>
							<select id="DrinkId">
							</select>
							<label for="Price">Price:</label>
							<input type="text" id="Price" pattern="[0-9.]+" title="Can only contain numbers" required /></br>
					
							</br>
							<input type="submit" value="Insert" />
							</form>
							
							<hr>
							<label for="DrinkAtPub">Food:</label>
							<select id="DrinkAtPub" required>
							</select>
							<button type="button" onclick="RemoveDrinkItem();">Remove Drink Item</button>
						</div>
						<div id="contentRight" class="one-half column"> <!--Display your content in this section-->	
							<table id="DrinkMenu"></table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>