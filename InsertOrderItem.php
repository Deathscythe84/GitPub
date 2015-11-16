<html>
<head>
<?php
include "db/db.php";

$orderquery = "select Order_ID From Orders";
$orderresult = mysql_query($orderquery, $db);

$componentquery = "select Component_ID,Component_Name From Component";
$componentresult = mysql_query($componentquery, $db);

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
							<h3>Insert Order Item</h3> <!--Content Title goes here!-->
						</div>
					</div>
					<div class="row">
						<form name="insertOrderItem" method="post" action="db/InsertIntoOrderItem.php">
						<div id="contentLeft" class="one-half column"> <!--Display your content in this section-->
							<label for="OrderID">Order ID</label>
							<select name="OrderID">
							<option value="0"></option>
							<?php
							
							while($ordersrow = mysql_fetch_array($orderresult)){
								echo "<option value=".$ordersrow['Order_ID'].">".$ordersrow['Order_ID']."</option>";
							}
							?>
							</select></br>

							<label for="ComponentID">Component ID</label>
							<select required name="ComponentID">
							<option value=""></option>
							<?php
							
							while($Componentrow = mysql_fetch_array($componentresult)){
								echo "<option value=".$Componentrow['Component_ID'].">".$Componentrow['Component_Name']."</option>";
							}
							?>
							</select>
							</br>
							<input type="submit" value="Insert" />

						</div>
						<div id="contentRight" class="one-half column"> <!--Display your content in this section-->
							<label for="Quantity">Quantity:</label>
							<input type="text" name="Quantity" pattern="[0-9]+" title="Can only contain numbers" required/></br>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>