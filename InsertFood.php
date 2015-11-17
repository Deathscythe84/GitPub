<html>
<head>
	<?php
	include "db/db.php";

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
							<h3>Insert Food</h3> <!--Content Title goes here!-->
						</div>
					</div>
					<div class="row">
						<!--Display your content in this section-->
						<div id="contentLeft" class="one-half column"> 
						<form name="insertfood" method="post" action="javascript:InsertFood()">
							<label for="Fname">Food name:</label>
							<input type="text" id="Fname" pattern="[A-Za-z\s']+" title="Can only contain letters" required />

							<label for="Ftype">Food type:</label>
							<input type="text" id="Ftype" pattern="[A-Za-z]+" title="Can only contain letters" required />
							
							<label for="FVeget">Is Vegetarian</label>
							<select id="FVeget"> 
								<option value="0">No</option>
								<option value="1">Yes</option>
							</select>

							<label for="FVegan">Is Vegan:</label>
							<select id="FVegan">
								<option value="0">No</option>
								<option value="1">Yes</option>
							</select>
							</br><input type="submit" value="Insert" />
						</form>
						</div>
						<!--Display your content in this section-->
						<div id="contentRight" hidden class="one-half column"> 
						<form  action="javascript:addComponentToFood()">
								<input type="hidden" id="FoodID" required/>
							
								Component:	</br>
											<select required id="CompID">
											</select>
											</br>
								Quantity: 	</br><input type="text" id="quantity" pattern="[0-9]+" title="Can only contain numbers" required /></br>
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