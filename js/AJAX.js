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
				updateComponentsForDrink();
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
	function addComponentToDrink()
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
				document.getElementById("drinkcomptable").innerHTML = xmlhttp.responseText;
				updateComponentsForDrink();
				getDrinkTableComponents();
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
	function updateComponentsForDrink()
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
	function getDrinkTableComponents()
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
					document.getElementById("drinkcomptable").innerHTML = xmlhttp.responseText;
					document.getElementById("DrinkID").value=document.getElementById("DrinkList").value;
					updateComponentsForDrink();
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
			document.getElementById("drinkcomptable").innerHTML = "<tr><th>Component</th><th>Quantity</th></tr>";
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
					document.getElementById("DrinkComponents").innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("POST","db/GetComponentsForDrink.php",false);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send(data);
	}
	function RemoveDrinkComponent()
	{
		if(document.getElementById("DrinkComponents").value!="")
		{
			var data = 'DrinkID='+document.getElementById("DrinkID").value+
						'&ComponentID='+document.getElementById("DrinkComponents").value;
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange= function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
					updateComponentsForDrink();
					getDrinkTableComponents();
				}
			}
			xmlhttp.open("POST","db/RemoveDrinkComponent.php",true);
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
					document.getElementById("drinkcomptable").innerHTML = "<tr><th>Component</th><th>Quantity</th></tr>";
				}
			}
			xmlhttp.open("POST","db/RemoveDrink.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send(data);
		}
	}