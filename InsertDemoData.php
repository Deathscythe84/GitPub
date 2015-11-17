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
							<h3>Insert Demographic Data</h3> <!--Content Title goes here!-->
						</div>
					</div>
					<div class="row">
						<form name="insertDemoData" method="post" action="db/InsertIntoDemoData.php">
							<div id="contentLeft" class="one-half column"> <!--Display your content in this section-->
								<label for="PubID">Pub:</label>
								<select required name="PubID">
								<option value=""></option>
								<?php
								
								while($pubrow = mysql_fetch_array($pubresult)){
									echo "<option value=".$pubrow['Pub_ID'].">".$pubrow['Pub_Name']."</option>";
								}
								
								?>
								</select>
								<label for="Date">Date:</label>
								<input type="date" name="Date" Placeholder="YYYY-MM-DD" pattern="[0-9].{3}-[0-9].{1}-[0-9].{1}" title="YYYY-MM-DD" />
								</br>
								<input type="submit" value="Insert" />
								


							</div>
							<div id="contentRight" class="one-half column"> <!--Display your content in this section-->
								<label for="Type">Type:</label>
								<input type="text" name="Type" pattern="[A-Za-z\s]+" title="Can only contain letters" />
								<label for="Value">Value:</label>
								<input type="text" name="Value" pattern="[A-Za-z0-9]+" title="Can only contain letters and numbers" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>