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
	window.onload= function () 
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
							<h3>Update Supplier</h3> <!--Content Title goes here!-->
						</div>
					</div>
					<div class="row">
						<div id="contentLeft" class="one-half column"> <!--Display your content in this section-->
							<select id="SelectSupplier" onchange="javascript:GetSupplierDetails()"></select>
							<table id="tableSupplierDetails"></table>
						</div>
						<div id="contentRight" hidden class="one-half column"> <!--Display your content in this section-->
							<form id="insertsupp" method="post" action="javascript:UpdateSupplier()">
								<input type="text" Placeholder="Supplier Name" id="Supp_Name" pattern="[A-Za-z\s']+" title="Can only contain letters" required /></br>
								<input type="text" Placeholder="Address1" id="Add1" pattern="[A-Za-z0-9\s]+" title="Can only contain letters and numbers" required /></br>
								<input type="text" Placeholder="Address2" id="Add2" pattern="[A-Za-z\s]+" title="Can only contain letters"/></br>
								<input type="text" Placeholder="Address3" id="Add3" pattern="[A-Za-z\s]+" title="Can only contain letters"/></br>
								<input type="text" Placeholder="City" id="City" pattern="[A-Za-z\s]+" title="Can only contain letters" required /></br>
								<input type="text" Placeholder="Country" id="Country" pattern="[A-Za-z\s]+" title="Can only contain letters" required /></br>
								<input type="text" Placeholder="Postcode" id="PCode" pattern="[A-Za-z0-9]+" title="Can only contain letters and numbers" required /></br>		

								</br><input type="submit" value="Update" />
							</form>
							<hr>
							<button type="button" onclick="javascript:DeleteSupplier()">Delete Supplier</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>