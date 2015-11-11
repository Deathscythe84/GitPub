<?php 
session_start();

if($_SESSION["Login"]==false)
{
	//header('Location:index.php');
}
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
				$('#insertdrinkcomp').show();
			}
		}
		xmlhttp.open("POST","db/InsertIntoDrink.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function addComponent()
	{
		var data = 'DrinkID='+document.getElementById("DrinkID").value+
		'&CompID='+document.getElementById("CompID").value+
		'&quantity='+document.getElementById("quantity").value;

		//Removes the selected component from the list, disallowing double entries
		var Component = document.getElementById("CompID");
		Component.remove(Component.selectedIndex);
		
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("drinkcomps").innerHTML += xmlhttp.responseText;
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
		var data = 'DrinkID='+document.getElementById("DrinkID").value;;
		
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
		xmlhttp.open("POST","db/UpdateComponentList.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
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

								Drink Name: </br><input type="text" id="DrinkName" pattern="[A-Za-z\s']+" title="Can only contain letters" required /></br>
								Drink Type: </br><input type="text" id="DrinkType" pattern="[A-Za-z\s]+" title="Can only contain letters" required /></br>
								Percentage of Alcohol: </br><p></p><input type="text" id="PCAlcohol" pattern="[0-9]+" title="Can only contains numbers" required /></br>
								
								</br><input type="submit" value="Insert Drink" />
							</form>
						</div>
						<div id="contentRight" class="one-half column"> <!--Display your content in this section-->
							<form id="insertdrinkcomp" hidden=true; action="javascript:addComponent()">

								<input type="hidden" name="DrinkID" id="DrinkID" required/>
							
								Component:	<select required id="CompID">
											<option value=""></option>
											<?php
											while($comprow = mysql_fetch_array($compresult))
											{
											echo "<option value=".$comprow['Component_ID'].">".$comprow['Component_Name']."</option>";
											}
											?>
											</select></br>
								
								Quantity: <input type="text" id="quantity" pattern="[0-9]+" title="Can only contain numbers" required /></br>
								<input type="submit" value="Add Component" />
								</br></br><button type="button" onclick="insertComponent()">New Components</button><Button type="button" onclick="updateComponents()">Update</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>