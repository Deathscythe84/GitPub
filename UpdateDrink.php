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

	<script>
	function addDrink()
	{	
		var data = 'DrinkName='+document.getElementById("DrinkName").value+
		'&DrinkType='+document.getElementById("DrinkType").value+
		'&PCAlcohol='+document.getElementById("PCAlcohol").value;

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("contentLeft").innerHTML = xmlhttp.responseText;
				document.getElementById("DrinkID").value=document.getElementById("drinkid").value;
				updateComponents();
				$('#insertdrinkcomp').show();
			}
		}
		xmlhttp.open("POST","db/InsertIntoDrink.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function getDrinks()
	{	
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("DrinkList").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/GetDrinks.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function addComponent()
	{
		var data = 'DrinkID='+document.getElementById("DrinkID").value+
		'&CompID='+document.getElementById("CompID").value+
		'&quantity='+document.getElementById("quantity").value;

		document.getElementById("quantity").value="";
		
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("drinkcomps").innerHTML = xmlhttp.responseText;
				updateComponents();
			}
		}
		xmlhttp.open("POST","db/InsertIntoDrinkComponent.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function insertComponent()
	{
		var myWindow = window.open("InsertComponent.php","width=400","height=400");
	}
	function updateComponents()
	{
		var data = 'DrinkID='+document.getElementById("DrinkID").value;
		
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("CompID").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/UpdateComponentList.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function getComponents()
	{
		if(document.getElementById("DrinkList").value!="")
		{
			var data = 'DrinkID='+document.getElementById("DrinkList").value;
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange= function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
					document.getElementById("drinkcomps").innerHTML = xmlhttp.responseText;
					document.getElementById("DrinkID").value=document.getElementById("DrinkList").value;
					updateComponents();
					getComponentsForDrink();
					$('#contentRight').show();
				}
			}
			xmlhttp.open("POST","db/UpdateDrinkComponentTable.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send(data);
		}
		else
		{
			$('#contentRight').hide();
			document.getElementById("drinkcomps").innerHTML = "<tr><th>Component</th><th>Quantity</th></tr>";
			document.getElementById("DrinkID").value=document.getElementById("DrinkList").value;
		}
	}
	function getComponentsForDrink()
	{
			var data = 'DrinkID='+document.getElementById("DrinkList").value;
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange= function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
					document.getElementById("removeComp").innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("POST","db/GetComponentsForDrink.php",false);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send(data);
	}
	function RemoveComponent()
	{
		if(document.getElementById("removeComp").value!="")
		{
			var data = 'DrinkID='+document.getElementById("DrinkID").value+
						'&ComponentID='+document.getElementById("removeComp").value;
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange= function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
					updateComponents();
					getComponents();
				}
			}
			xmlhttp.open("POST","db/RemoveComponent.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send(data);
		}
	}
	function RemoveDrink()
	{
		if(document.getElementById("DrinkID").value!="")
		{
			var data = 'DrinkID='+document.getElementById("DrinkID").value;
						
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange= function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
					getDrinks();
					$('#contentRight').hide();
					document.getElementById("drinkcomps").innerHTML = "<tr><th>Component</th><th>Quantity</th></tr>";
				}
			}
			xmlhttp.open("POST","db/RemoveDrink.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send(data);
		}
	}
	window.onload = getDrinks;
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
							<h3>Update Drink</h3> <!--Content Title goes here!-->
						</div>
					</div>
					<div class="row">
						<div id="contentLeft" class="one-half column"> <!--Display your content in this section-->
							<select id="DrinkList" onchange="getComponents()"></select>
							
							<table id='drinkcomps'><tr><th>Component</th><th>Quantity</th></tr></table>
						</div>
						<div id="contentRight" hidden class="one-half column"> <!--Display your content in this section-->
							
							<select id="removeComp"></select> 
							<button type="button" onclick="RemoveComponent()">Remove</button>
							<hr>
							
							<form id="insertdrinkcomp" action="javascript:addComponent()">

								<input type="hidden" name="DrinkID" id="DrinkID" required/>
							
								Component:	</br>
											<select required id="CompID">
											</select>
											
											<span class="refreshIcon" onclick="updateComponents()"><i class="fi-refresh"></i></span></br>
											
								Quantity: 	</br><input type="text" id="quantity" pattern="[0-9]+" title="Can only contain numbers" required /></br>
								<input type="submit" value="Add Component" />
								</br></br><button type="button" onclick="insertComponent()">New Components</button>
							</form>
							
							<hr>
							<button type="button" onclick="RemoveDrink()">Remove Drink</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>