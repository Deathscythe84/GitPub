<?php 
echo "
	<li class='navOption'><a href='home.php'>Home</a>
	</li>

	<li class='navOption'><a href='UpdateStaff.php'>Personal Details</a>
	</li>
	
	<li class='navOption'>
	<a href='Tables.php'>Tables</a>
		<ul>
			<li class='subOption' onclick=GetDataTest('DataTest.php');>List Drinks</li>
			<li class='subOption' onclick=GetDataTest('db/GetRevenue.php');>List Revenue</li>
			
		</ul>
	</li>
	
	<li class='navOption'>
	<a href='index.php'>Logout</a>
	</li>
"

?>