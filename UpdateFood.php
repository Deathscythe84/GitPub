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
<?php
	include "db/db.php";

	$compquery = "select Component_ID,Component_Name From Component";
	$compresult = mysql_query($compquery, $db);
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
	<script>
	window.onload = getFood;
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
							<h3>Update Food</h3> <!--Content Title goes here!-->
						</div>
					</div>
					<div class="row">
						<div id="contentLeft" class="one-half column"> <!--Display your content in this section-->
							<select id="FoodList" onchange="getFoodTableComponents()"></select>
							
							<table id='foodcomptable'><tr><th>Component</th><th>Quantity</th></tr></table>
						</div>
						<div id="contentRight" hidden class="one-half column"> <!--Display your content in this section-->
							
							<select id="FoodComponents"></select> 
							<button type="button" onclick="RemoveFoodComponent()">Remove</button>
							<hr>
							
							<form id="insertfoodcomp" action="javascript:addComponentToFood()">

								<input type="hidden" id="FoodID" required/>
							
								Component:	</br>
											<select required id="CompID">
											</select>
											
								Quantity: 	</br><input type="text" id="quantity" pattern="[0-9]+" title="Can only contain numbers" required /></br>
								<input type="submit" value="Add Component" />
							</form>
							
							<hr>
							<button type="button" onclick="RemoveFood()">Remove Food</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>