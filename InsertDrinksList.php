<html>
<head>
<?php
include "db/db.php";

$pubquery = "select Pub_ID,Pub_Name From Pub";
$pubresult = mysql_query($pubquery, $db);

$drinkquery = "select Drink_ID,Drink_Name From Drink";
$drinkresult = mysql_query($drinkquery, $db);
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
						<form name="insertDrinksList" method="post" action="db/InsertIntoDrinkList.php">
							<div id="contentLeft" class="one-half column"> <!--Display your content in this section-->
								<label for="DrinkId">Drink:</label>
								<select name="DrinkId">
								<option value="0"></option>
								<?php
								
								while($drinkrow = mysql_fetch_array($drinkresult)){
									echo "<option value=".$drinkrow['Drink_ID'].">".$drinkrow['Drink_Name']."</option>";
								}
								
								?>
								</select>
								<label for="PubID">Pub:</label>
								<select required name="PubID">
								<option value=""></option>
								<?php
								
								while($pubrow = mysql_fetch_array($pubresult)){
									echo "<option value=".$pubrow['Pub_ID'].">".$pubrow['Pub_Name']."</option>";
								}
								
								?>
								</select>
								<label for="Price">Price:</label>
								<input type="text" name="Price" pattern="[0-9.]+" title="Can only contain numbers" required /></br>
						
								</br>
								<input type="submit" value="Insert" />
							</div>
							<div id="contentRight" class="one-half column"> <!--Display your content in this section-->	

							</div>
						</form>		
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>