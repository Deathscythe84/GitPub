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
							<h3>Add Drink</h3> <!--Content Title goes here!-->
						</div>
					</div>
					<div class="row">
						<div id="contentLeft" class="one-half column"> <!--Display your content in this section-->
							<form name="insertDrink" action="javascript:addDrink()">
								<label for="DrinkName">Drink Name:</label>
								<input type="text" id="DrinkName" pattern="[A-Za-z\s']+" title="Can only contain letters" required />
								<label for="DrinkType">Drink Type:</label>
								<input type="text" id="DrinkType" pattern="[A-Za-z\s]+" title="Can only contain letters" required />
								<label for="PCAlcohol">Alcohol Percentage:</label>
								<input type="text" id="PCAlcohol" pattern="[0-9.]+" title="Can only contains numbers" required /></br>
								
								</br><input type="submit" value="Insert Drink" />
							</form>
						</div>
						<div id="contentRight" class="one-half column"> <!--Display your content in this section-->
							<form id="insertdrinkcomp" hidden action="javascript:addComponentToDrink()">

								<input type="hidden" name="DrinkID" id="DrinkID" required/>
							
								Component:	</br>
											<select required id="CompID">
											</select>
											
											<span class="refreshIcon" onclick="updateComponentsForDrink()"><i class="fi-refresh"></i></span></br>
											
								Quantity: 	</br><input type="text" id="quantity" pattern="[1-9][0-9]*" title="Can only contain numbers and must be greater than 0" required /></br>
								<input type="submit" value="Add Component" />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>