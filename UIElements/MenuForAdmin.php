<?php 
echo "
	<li class='navOption'><a href='home.php'>Home</a>
	</li>

	<li class='navOption'><a href='UpdateStaff.php'>Personal Details</a>
	</li>

	<li class='navOption'>
	<a href='#'>Add</a>
		<ul>
			<li class='subOption'><a href='InsertPub.php'>Pub</a></li>
			<li class='subOption'><a href='InsertStaff.php'>Staff</a></li>
			<li class='subOption'><a href='InsertJob.php'>Jobs</a></li>
			<li class='subOption'><a href='InsertDrink.php'>Drinks</a></li>
			<li class='subOption'><a href='InsertFood.php'>Food</a></li>
			<li class='subOption'><a href='InsertSupplier.php'>Suppliers</a></li>
		</ul>
	</li>

	<li class='navOption'>
	<a href='#'>Update</a>
		<ul>
			<li class='subOption'><a href='UpdateDrinkComponents.php'>Drinks</a></li>
			<li class='subOption'><a href='UpdateFoodComponents.php'>Food</a></li>
			<li class='subOption'><a href='UpdateJob.php'>Jobs</a></li>
			<li class='subOption'><a href='UpdateSupplier.php'>Suppliers</a></li>
			<li class='subOption'><a href='InsertComponent.php'>Supplier Goods</a></li>
			<li class='subOption'><a href='UpdateComponent.php'>Components</a></li>
		</ul>
	</li>

	<li class='navOption'>
	<a href='index.php'>Logout</a>
	</li>
"

?>