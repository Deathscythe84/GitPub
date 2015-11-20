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
		var data = 'CName='+document.getElementById("componentName").value+
		'&SuppID='+document.getElementById("SelectSupplier").value+
		'&price='+document.getElementById("componentPrice").value;
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				GetListOfSuppliers();
				document.getElementById("tableSupplierComponents").innerHTML = "";
				$('#contentRight').hide();
				document.getElementById("componentDetails").reset();
			}
		}
		xmlhttp.open("POST","db/InsertIntoComponent.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
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
		xmlhttp.open("POST","db/UpdateComponentListNotInDrink.php",false);
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
	function addSupplier()
	{	
		var data = 'Supp_Name='+document.getElementById("Supp_Name").value+
		'&Add1='+document.getElementById("Add1").value+
		'&Add2='+document.getElementById("Add2").value+
		'&Add3='+document.getElementById("Add3").value+
		'&City='+document.getElementById("City").value+
		'&Country='+document.getElementById("Country").value+
		'&PCode='+document.getElementById("PCode").value;

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("insertsupp").reset();
			}
		}
		xmlhttp.open("POST","db/InsertIntoSupp.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function GetSupplierDetails()
	{	
		if(document.getElementById("SelectSupplier").value!="")
		{
		var data = 'SuppID='+document.getElementById("SelectSupplier").value;

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("tableSupplierDetails").innerHTML = xmlhttp.responseText;
				GetUpdateSupplierForm();
				$('#contentRight').show();
			}
		}
		xmlhttp.open("POST","db/GetSupplierDetailsTable.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
		}
		else
		{
			document.getElementById("tableSupplierDetails").innerHTML = "";
			$('#contentRight').hide();
		}
	}
	function GetListOfSuppliers()
	{	
		if(window.XMLHttpRequest)
		{
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("SelectSupplier").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/GetListOfSuppliers.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function GetUpdateSupplierForm()
	{
		var data = 'SuppID='+document.getElementById("SelectSupplier").value;

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("insertsupp").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/GetUpdateSupplierDetailsForm.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function UpdateSupplier()
	{	
		var data = 'Supp_Name='+document.getElementById("Supp_Name").value+
		'&Add1='+document.getElementById("Add1").value+
		'&Add2='+document.getElementById("Add2").value+
		'&Add3='+document.getElementById("Add3").value+
		'&City='+document.getElementById("City").value+
		'&Country='+document.getElementById("Country").value+
		'&PCode='+document.getElementById("PCode").value+
		'&SuppID='+document.getElementById("SelectSupplier").value;

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("SelectSupplier").selectedIndex=0;
				document.getElementById("tableSupplierDetails").innerHTML = "";
				$('#contentRight').hide();
				GetListOfSuppliers();
			}
		}
		xmlhttp.open("POST","db/UpdateSupplier.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function DeleteSupplier()
	{	
		if(document.getElementById("SelectSupplier").value!="")
		{
		var data = 'SuppID='+document.getElementById("SelectSupplier").value;

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("SelectSupplier").selectedIndex=0;
				document.getElementById("tableSupplierDetails").innerHTML = "";
				$('#contentRight').hide();
				GetListOfSuppliers();
			}
		}
		xmlhttp.open("POST","db/DeleteSupplier.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
		}
	}
	function GetSupplierComponentsTable()
	{
		if(document.getElementById("SelectSupplier").value!="")
		{
		var data = 'SuppID='+document.getElementById("SelectSupplier").value;

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("tableSupplierComponents").innerHTML = xmlhttp.responseText;
				$('#contentRight').show();
				GetSupplierComponentsList();
			}
		}
		xmlhttp.open("POST","db/UpdateSupplierComponentTable.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
		}
		else
		{
			document.getElementById("tableSupplierComponents").innerHTML = "";
			$('#contentRight').hide();
		}
	}
	function GetSupplierComponentsList()
	{
		if(document.getElementById("SelectSupplier").value!="")
		{
		var data = 'SuppID='+document.getElementById("SelectSupplier").value;

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
		xmlhttp.open("POST","db/UpdateSupplierComponentList.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
		}
		else
		{
			document.getElementById("CompID").innerHTML = "";
			$('#contentRight').hide();
		}
	}
	function RemoveComponent()
	{
		if(document.getElementById("CompID").value!="")
		{
			var data = 'ComponentID='+document.getElementById("CompID").value;
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange= function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
					GetListOfSuppliers();
					$('#contentRight').hide();
					document.getElementById("tableSupplierComponents").innerHTML = "";
				}
			}
			xmlhttp.open("POST","db/RemoveComponent.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send(data);
		}
	}
	function InsertFood()
	{	
		var data = 'Fname='+document.getElementById("Fname").value+
		'&Ftype='+document.getElementById("Ftype").value+
		'&FVeget='+document.getElementById("FVeget").value+
		'&FVegan='+document.getElementById("FVegan").value;

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("contentLeft").innerHTML = xmlhttp.responseText;
				document.getElementById("FoodID").value=document.getElementById("foodid").value;
				updateComponentsForFood();
				$('#contentRight').show();
			}
		}
		xmlhttp.open("POST","db/InsertIntoFood.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function updateComponentsForFood()
	{
		var data = 'FoodID='+document.getElementById("FoodID").value;
		
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
		xmlhttp.open("POST","db/UpdateComponentListNotInFood.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function addComponentToFood()
	{
		var data = 'FoodID='+document.getElementById("FoodID").value+
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
				document.getElementById("foodcomptable").innerHTML = xmlhttp.responseText;
				updateComponentsForFood();
				getComponentsForFood();
			}
		}
		xmlhttp.open("POST","db/InsertIntoFoodComponent.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function getFoodTableComponents()
	{
		if(document.getElementById("FoodList").value!="")
		{
			var data = 'FoodID='+document.getElementById("FoodList").value;
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange= function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
					document.getElementById("foodcomptable").innerHTML = xmlhttp.responseText;
					document.getElementById("FoodID").value=document.getElementById("FoodList").value;
					updateComponentsForFood();
					getComponentsForFood();
					$('#contentRight').show();
				}
			}
			xmlhttp.open("POST","db/UpdateFoodComponentTable.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send(data);
		}
		else
		{
			$('#contentRight').hide();
			document.getElementById("foodcomptable").innerHTML = "<tr><th>Component</th><th>Quantity</th></tr>";
			document.getElementById("FoodID").value=document.getElementById("FoodList").value;
		}
	}
	function getFood()
	{	
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("FoodList").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/GetFood.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function getComponentsForFood()
	{
			var data = 'FoodID='+document.getElementById("FoodList").value;
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange= function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
					document.getElementById("FoodComponents").innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("POST","db/GetComponentsForFood.php",false);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send(data);
	}
	function RemoveFoodComponent()
	{
		if(document.getElementById("FoodComponents").value!="")
		{
			var data = 'FoodID='+document.getElementById("FoodList").value+
						'&ComponentID='+document.getElementById("FoodComponents").value;
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange= function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
					updateComponentsForFood();
					getFoodTableComponents();
				}
			}
			xmlhttp.open("POST","db/RemoveFoodComponent.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send(data);
		}
	}
	function RemoveFood()
	{
		if(document.getElementById("FoodID").value!="")
		{
			var data = 'FoodID='+document.getElementById("FoodID").value;
						
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange= function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
					getFood();
					$('#contentRight').hide();
					document.getElementById("foodcomptable").innerHTML = "<tr><th>Component</th><th>Quantity</th></tr>";
				}
			}
			xmlhttp.open("POST","db/RemoveFood.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send(data);
		}
	}
	function InsertOrder()
	{	
		var d = new Date();
		var today = d.getFullYear()+"-"+("0"+(d.getMonth()+1)).slice(-2)+"-"+("0"+d.getDate()).slice(-2);
		var supplier = document.getElementById("SelectSupplier");
		
		var data = 'Supplier='+document.getElementById("SelectSupplier").value+
		'&PubID='+document.getElementById("PubID").value+
		'&Date='+today+
		'&SupplierName='+supplier.options[supplier.selectedIndex].text+
		'&TCost=0';

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("contentLeft").innerHTML = xmlhttp.responseText;
				UpdateComponentsNotInOrder();
				UpdateComponentsInOrder();
				$('#contentRight').show();
			}
		}
		xmlhttp.open("POST","db/InsertIntoOrder.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function InsertOrderItem()
	{
		var data = 'OrderID='+document.getElementById("orderid").value+
		'&ComponentID='+document.getElementById("ComponentID").value+
		'&Quantity='+document.getElementById("Quantity").value;
		
		
		document.getElementById("Quantity").value="";

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("ordercomptable").innerHTML = xmlhttp.responseText;
				UpdateComponentsNotInOrder();
				UpdateComponentsInOrder();
			}
		}
		xmlhttp.open("POST","db/InsertIntoOrderItem.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function UpdateComponentsNotInOrder()
	{
		var data = 'OrderID='+document.getElementById("orderid").value+
					'&Supplier='+document.getElementById("Supplierid").value;
		
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("ComponentID").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/UpdateComponentListNotInOrder.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function UpdateComponentsInOrder()
	{
		var data = 'OrderID='+document.getElementById("orderid").value+
					'&Supplier='+document.getElementById("Supplierid").value;
		
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("OrderComponents").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/GetComponentsForOrder.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function RemoveOrderComponent()
	{
		if(document.getElementById("OrderComponents").value!="")
		{
			var data = 'ComponentID='+document.getElementById("OrderComponents").value+
			'&OrderID='+document.getElementById("orderid").value;
						
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange= function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
					document.getElementById("ordercomptable").innerHTML = xmlhttp.responseText;
					UpdateComponentsNotInOrder();
					UpdateComponentsInOrder();
					
				}
			}
			xmlhttp.open("POST","db/RemoveOrderItem.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send(data);
		}
	}
	function RemoveOrder()
	{
		var data = 'OrderID='+document.getElementById("orderid").value;
		
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				window.location="InsertOrder.php";
			}
		}
		xmlhttp.open("POST","db/RemoveOrder.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	
	}
	function getFoodListForNotPub()
	{	
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("FoodId").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/GetFoodListForNotPub.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function InsertFoodListItem()
	{
		var data = 'FoodId='+document.getElementById("FoodId").value+
		'&Price='+document.getElementById("Price").value;
		
		document.getElementById("Price").value="";

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				getFoodListForNotPub();
				getFoodListForPub();
				getFoodTableForPub();
			}
		}
		xmlhttp.open("POST","db/InsertIntoFoodList.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function getFoodTableForPub()
	{	
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("Menu").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/GetFoodListTableForPub.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function getFoodListForPub()
	{	
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("FoodAtPub").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/GetFoodListForPub.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function RemoveFoodItem()
	{
		var data = 'FoodID='+document.getElementById("FoodAtPub").value;
		
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				getFoodListForNotPub();
				getFoodListForPub();
				getFoodTableForPub();
			}
		}
		xmlhttp.open("POST","db/RemoveFoodList.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	
	}
	function getDrinkListForNotPub()
	{	
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("DrinkId").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/GetDrinkListForNotPub.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function InsertDrinkListItem()
	{
		var data = 'DrinkId='+document.getElementById("DrinkId").value+
		'&Price='+document.getElementById("Price").value;
		
		document.getElementById("Price").value="";

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				getDrinkListForNotPub();
				getDrinkListForPub();
				getDrinkTableForPub();
			}
		}
		xmlhttp.open("POST","db/InsertIntoDrinkList.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function getDrinkTableForPub()
	{	
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("DrinkMenu").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/GetDrinkListTableForPub.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function getDrinkListForPub()
	{	
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("DrinkAtPub").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/GetDrinkListForPub.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function RemoveDrinkItem()
	{
		var data = 'DrinkID='+document.getElementById("DrinkAtPub").value;
		
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				getDrinkListForNotPub();
				getDrinkListForPub();
				getDrinkTableForPub();
			}
		}
		xmlhttp.open("POST","db/RemoveDrinkList.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	
	}
	function InsertPub()
	{
		var data = 'Pname='+document.getElementById("Pname").value+
		'&Padd1='+document.getElementById("Padd1").value+
		'&Padd2='+document.getElementById("Padd2").value+
		'&Padd3='+document.getElementById("Padd3").value+
		'&Pcity='+document.getElementById("Pcity").value+
		'&Pcountry='+document.getElementById("Pcountry").value+
		'&Ppcode='+document.getElementById("Ppcode").value;

		document.getElementById("insertbar").reset();

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
			}
		}
		xmlhttp.open("POST","db/InsertIntoPub.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function InsertDemographicData()
	{
		var data = 'Type='+document.getElementById("Type").value+
		'&Value='+document.getElementById("Value").value+
		'&Date='+document.getElementById("Date").value;

		document.getElementById("insertDemoData").reset();

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
			}
		}
		xmlhttp.open("POST","db/InsertIntoDemoData.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function InsertEntertainmentItem()
	{
		var data = 'EntertainmentType='+document.getElementById("EntertainmentType").value+
		'&EntertainmentName='+document.getElementById("EntertainmentName").value+
		'&EntertainmentCost='+document.getElementById("EntertainmentCost").value+
		'&CostDuration='+document.getElementById("CostDuration").value;
		
		document.getElementById("insertEntertainment").reset();

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				getEntertainmentListForPub();
				getEntertainmentTableForPub();
			}
		}
		xmlhttp.open("POST","db/InsertIntoEntertainment.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function getEntertainmentTableForPub()
	{	
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("EntertainmentTable").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/GetEntertainmentTableForPub.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function getEntertainmentListForPub()
	{	
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("EntertainmentAtPub").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/GetEntertainmentListForPub.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function RemoveEntertainmentItem()
	{
		var data = 'EntertainmentID='+document.getElementById("EntertainmentAtPub").value;
		
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				getEntertainmentListForPub();
				getEntertainmentTableForPub();
			}
		}
		xmlhttp.open("POST","db/RemoveEntertainment.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	
	}
	function InsertStaff()
	{
		var data = 'PubID='+document.getElementById("PubID").value+
		'&JobID='+document.getElementById("JobID").value+
		'&FName='+document.getElementById("FName").value+
		'&SName='+document.getElementById("SName").value+
		'&DOB='+document.getElementById("DOB").value+
		'&Address='+document.getElementById("Address").value+
		'&City='+document.getElementById("City").value+
		'&Postcode='+document.getElementById("Postcode").value+
		'&StartDate='+document.getElementById("StartDate").value+
		'&Sortcode='+document.getElementById("Sortcode").value+
		'&AccNumber='+document.getElementById("AccNumber").value+
		'&Password='+document.getElementById("Password").value;

		document.getElementById("insertstaff").reset();

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				alert(xmlhttp.responseText);
			}
		}
		xmlhttp.open("POST","db/InsertIntoStaff.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function getPubsForInsertStaff()
	{	
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("PubID").innerHTML = xmlhttp.responseText;
				if(document.getElementById("PubID").value!=0)document.getElementById("PubID").disabled=true;
			}
		}
		xmlhttp.open("POST","db/GetListOfPubsForInsertUser.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function getJobsForInsertStaff()
	{	
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("JobID").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/GetListOfJobsForInsertUser.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function InsertJob()
	{

		var data = 'Title='+document.getElementById("Title").value+
		'&Rate='+document.getElementById("Rate").value+
		'&AccLevel='+document.getElementById("AccessLevel").value;

		document.getElementById("insertjob").reset();

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				alert("Job Inserted");
			}
		}
		xmlhttp.open("POST","db/InsertIntoJob.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function GetMenu()
	{
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("navList").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","UIElements/GetMenuForUser.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function GetDataTest(url)
	{
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("TablesContent").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST",url,true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function GetStaffDetails()
	{
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("tableStaffDetails").innerHTML = xmlhttp.responseText;
				//$('#contentRight').show();
			}
		}
		xmlhttp.open("POST","db/GetStaffDetailsTable.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function GetUpdateStaffForm()
	{
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("insertstaff").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/GetUpdateStaffDetailsForm.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	function UpdateStaff()
	{
		var data = 'FName='+document.getElementById("FName").value+
		'&SName='+document.getElementById("SName").value+
		'&DOB='+document.getElementById("DOB").value+
		'&Address='+document.getElementById("Address").value+
		'&City='+document.getElementById("City").value+
		'&Postcode='+document.getElementById("Postcode").value+
		'&Sortcode='+document.getElementById("Sortcode").value+
		'&AccNumber='+document.getElementById("AccNumber").value;

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				GetStaffDetails();
				GetUpdateStaffForm();
				$('#contentRight').hide();
			}
		}
		xmlhttp.open("POST","db/UpdateStaff.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function GetComponentDetailsForm()
	{
		if(document.getElementById("CompID").value!="")
		{
		var data = 'CompID='+document.getElementById("CompID").value;

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("componentDetails").innerHTML = xmlhttp.responseText;
				$('#contentRight').show();
			}
		}
		xmlhttp.open("POST","db/GetUpdateComponentDetailsForm.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
		}
		else
		{
			document.getElementById("componentDetails").innerHTML = "";
			$('#contentRight').hide();
		}
	}
	function UpdateComponent()
	{
		var data = 'componentName='+document.getElementById("componentName").value+
		'&componentPrice='+document.getElementById("componentPrice").value+
		'&CompID='+document.getElementById("CompID").value;
		
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				$('#contentRight').hide();
				GetSupplierComponentsList();
			}
		}
		xmlhttp.open("POST","db/UpdateComponent.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function GetJobDetailsForm()
	{
		if(document.getElementById("JobID").value!="")
		{
		var data = 'JobID='+document.getElementById("JobID").value;

		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("JobDetails").innerHTML = xmlhttp.responseText;
				$('#contentRight').show();
			}
		}
		xmlhttp.open("POST","db/GetUpdateJobDetailsForm.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
		}
		else
		{
			document.getElementById("JobDetails").innerHTML = "";
			$('#contentRight').hide();
		}
	}
	function UpdateJob()
	{
		var data = 'Job_Title='+document.getElementById("Title").value+
		'&Pay_Rate='+document.getElementById("Rate").value+
		'&JobID='+document.getElementById("JobID").value;
		
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				$('#contentRight').hide();
				getJobs();
			}
		}
		xmlhttp.open("POST","db/UpdateJob.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(data);
	}
	function getJobs()
	{	
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange= function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
				document.getElementById("JobID").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","db/GetListOfJobs.php",false);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send(null);
	}
	