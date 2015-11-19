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
	<script>window.onload=function()
	{
		GetListOfSuppliers();
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
							<!--Content Title goes here!-->
							<h3>Insert Order</h3> 
						</div>
					</div>
					<div class="row">
						<!--Display your content in this section-->
						<div id="contentLeft" class="one-half column">
						<form name="insertorder" method="post" action="javascript:InsertOrder()">
							<label for="SelectSupplier">Supplier:</label> 
							<select id="SelectSupplier" required></select>
							<input id="PubID" type="hidden" value="<?php echo $_SESSION["PubID"] ?>" />
							</br>
							<input type="submit" value="Create Order" />
						</form>
						</div>
						<!--Display your content in this section-->
						<div id="contentRight" hidden class="one-half column">
						
							<select id="OrderComponents"></select> 
							<button type="button" onclick="RemoveOrderComponent()">Remove</button>
							<hr>
							
						<form name="insertorderitem" method="post" action="javascript:InsertOrderItem()">
							<label for="ComponentID">Component ID</label>
							<select id="ComponentID"required></select>
							
							<label for="Quantity">Quantity:</label>
							<input type="text" id="Quantity" pattern="[0-9]+" title="Can only contain numbers" required/></br>
							</br>
							<input type="submit" value="Insert" />
						</form>
						
						<hr>
						<button type="button" onclick="RemoveOrder()">Cancel Order</button>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>