<html>
<head>
<?php
include "db/db.php";

$pubquery = "select Pub_ID,Pub_Name From Pub";
$pubresult = mysql_query($pubquery, $db);
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
							<h3>Insert Entertainment</h3> <!--Content Title goes here!-->
						</div>
					</div>
					<div class="row">
						<!--Display your content in this section-->
						<form name="insertEntertainment" method="post" action="db/InsertIntoEntertainment.php">
							<div id="contentLeft" class="one-half column"> 
								<label for="PubID">Pub:</label>
								<select required name="PubID">
								<option value=""></option>
								<?php
								
								while($pubrow = mysql_fetch_array($pubresult)){
									echo "<option value=".$pubrow['Pub_ID'].">".$pubrow['Pub_Name']."</option>";
								}
								
								?>
								</select>
								<label for="EntertainmentType">Entertainment Type:</label>
								<input type="text" name="EntertainmentType" pattern="[A-Za-z\s]+" title="Can only contain letters" required />
								<label for="EntertainmentName">Entertainment Name:</label>
								<input type="text" name="EntertainmentName" pattern="[A-Za-z\s']+" title="Can only contain letters" required />
							</div>
							<!--Display your content in this section-->
							<div id="contentRight" class="one-half column"> 
								<label for="EntertainmentCost">Entertainment Cost:</label>
								<input type="text" name="EntertainmentCost" pattern="[0-9.]+" title="Can only contain numbers" required />
								<label for="CostDuration">Cost Duration:</label>
								<input type="text" name="CostDuration" pattern="[A-Za-z0-9]+" title="Can only contain letters and numbers" required />
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