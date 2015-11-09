<html>
<head>
<?php
include "db.php";

$pubquery = "select * From Pub";
$pubresult = mysql_query($pubquery, $db);

$jobquery = "select * From Job";
$jobresult = mysql_query($jobquery, $db);
?>
</head>
<body>
	<h1>Show Pubs</h1>
	<table>
	<?php
	$result=$pubresult;
		echo"<tr>";
	for($i=0;$i<mysql_num_fields($result);$i++)
		{
			echo "<th>".mysql_field_name($result,$i)."</th>";
		}
		echo"</tr>";

	while($row = mysql_fetch_array($result))
		{
			echo"<tr>";
			for($i=0;$i<mysql_num_fields($result);$i++)
				{
					echo "<td>".$row[mysql_field_name($result,$i)]."</td>";
				}
			echo"</tr>";
		}
	?>
	</table>
	
	<h1>Show Jobs</h1>
	<table>
	<?php
	$result=$jobresult;
		echo"<tr>";
	for($i=0;$i<mysql_num_fields($result);$i++)
		{
			echo "<th>".mysql_field_name($result,$i)."</th>";
		}
		echo"</tr>";

	while($row = mysql_fetch_array($result))
		{
			echo"<tr>";
			for($i=0;$i<mysql_num_fields($result);$i++)
				{
					echo "<td>".$row[mysql_field_name($result,$i)]."</td>";
				}
			echo"</tr>";
		}
	?>
	</table>
	
	<h1>Show Staff</h1>
	<table>
	<?php
	$result=mysql_query("Select * From Staff", $db);
		echo"<tr>";
	for($i=0;$i<mysql_num_fields($result);$i++)
		{
			echo "<th>".mysql_field_name($result,$i)."</th>";
		}
		echo"</tr>";

	while($row = mysql_fetch_array($result))
		{
			echo"<tr>";
			for($i=0;$i<mysql_num_fields($result);$i++)
				{
					echo "<td>".$row[mysql_field_name($result,$i)]."</td>";
				}
			echo"</tr>";
		}
	?>
	</table>
	
	<h1>Show Demographic Data</h1>
	<table>
	<?php
	$result=mysql_query("Select * From Demographic_Data", $db);
		echo"<tr>";
	for($i=0;$i<mysql_num_fields($result);$i++)
		{
			echo "<th>".mysql_field_name($result,$i)."</th>";
		}
		echo"</tr>";

	while($row = mysql_fetch_array($result))
		{
			echo"<tr>";
			for($i=0;$i<mysql_num_fields($result);$i++)
				{
					echo "<td>".$row[mysql_field_name($result,$i)]."</td>";
				}
			echo"</tr>";
		}
	?>
	</table>
	
	<h1>Show Entertainment</h1>
	<table>
	<?php
	$result=mysql_query("Select * From Entertainment", $db);
		echo"<tr>";
	for($i=0;$i<mysql_num_fields($result);$i++)
		{
			echo "<th>".mysql_field_name($result,$i)."</th>";
		}
		echo"</tr>";

	while($row = mysql_fetch_array($result))
		{
			echo"<tr>";
			for($i=0;$i<mysql_num_fields($result);$i++)
				{
					echo "<td>".$row[mysql_field_name($result,$i)]."</td>";
				}
			echo"</tr>";
		}
	?>
	</table>
	
	<h1>Show Drinks List</h1>
	<table>
	<?php
	$result=mysql_query("Select * From Drinks_List", $db);
		echo"<tr>";
	for($i=0;$i<mysql_num_fields($result);$i++)
		{
			echo "<th>".mysql_field_name($result,$i)."</th>";
		}
		echo"</tr>";

	while($row = mysql_fetch_array($result))
		{
			echo"<tr>";
			for($i=0;$i<mysql_num_fields($result);$i++)
				{
					echo "<td>".$row[mysql_field_name($result,$i)]."</td>";
				}
			echo"</tr>";
		}
	?>
	</table>
	
	<h1>Show Food List</h1>
	<table>
	<?php
	$result=mysql_query("Select * From Food_List", $db);
		echo"<tr>";
	for($i=0;$i<mysql_num_fields($result);$i++)
		{
			echo "<th>".mysql_field_name($result,$i)."</th>";
		}
		echo"</tr>";

	while($row = mysql_fetch_array($result))
		{
			echo"<tr>";
			for($i=0;$i<mysql_num_fields($result);$i++)
				{
					echo "<td>".$row[mysql_field_name($result,$i)]."</td>";
				}
			echo"</tr>";
		}
	?>
	</table>
	
	<h1>Show Drinks</h1>
	<table>
	<?php
	$result=mysql_query("Select * From Drink", $db);
		echo"<tr>";
	for($i=0;$i<mysql_num_fields($result);$i++)
		{
			echo "<th>".mysql_field_name($result,$i)."</th>";
		}
		echo"</tr>";

	while($row = mysql_fetch_array($result))
		{
			echo"<tr>";
			for($i=0;$i<mysql_num_fields($result);$i++)
				{
					echo "<td>".$row[mysql_field_name($result,$i)]."</td>";
				}
			echo"</tr>";
		}
	?>
	</table>
	
	<h1>Show Food</h1>
	<table>
	<?php
	$result=mysql_query("Select * From Food", $db);
		echo"<tr>";
	for($i=0;$i<mysql_num_fields($result);$i++)
		{
			echo "<th>".mysql_field_name($result,$i)."</th>";
		}
		echo"</tr>";

	while($row = mysql_fetch_array($result))
		{
			echo"<tr>";
			for($i=0;$i<mysql_num_fields($result);$i++)
				{
					echo "<td>".$row[mysql_field_name($result,$i)]."</td>";
				}
			echo"</tr>";
		}
	?>
	</table>
	
	<h1>Show Drink Component</h1>
	<table>
	<?php
	$result=mysql_query("Select * From Drink_Component", $db);
		echo"<tr>";
	for($i=0;$i<mysql_num_fields($result);$i++)
		{
			echo "<th>".mysql_field_name($result,$i)."</th>";
		}
		echo"</tr>";

	while($row = mysql_fetch_array($result))
		{
			echo"<tr>";
			for($i=0;$i<mysql_num_fields($result);$i++)
				{
					echo "<td>".$row[mysql_field_name($result,$i)]."</td>";
				}
			echo"</tr>";
		}
	?>
	</table>
	
	<h1>Show Food Component</h1>
	<table>
	<?php
	$result=mysql_query("Select * From Food_Component", $db);
		echo"<tr>";
	for($i=0;$i<mysql_num_fields($result);$i++)
		{
			echo "<th>".mysql_field_name($result,$i)."</th>";
		}
		echo"</tr>";

	while($row = mysql_fetch_array($result))
		{
			echo"<tr>";
			for($i=0;$i<mysql_num_fields($result);$i++)
				{
					echo "<td>".$row[mysql_field_name($result,$i)]."</td>";
				}
			echo"</tr>";
		}
	?>
	</table>
	
	<h1>Show Component</h1>
	<table>
	<?php
	$result=mysql_query("Select * From Component", $db);
		echo"<tr>";
	for($i=0;$i<mysql_num_fields($result);$i++)
		{
			echo "<th>".mysql_field_name($result,$i)."</th>";
		}
		echo"</tr>";

	while($row = mysql_fetch_array($result))
		{
			echo"<tr>";
			for($i=0;$i<mysql_num_fields($result);$i++)
				{
					echo "<td>".$row[mysql_field_name($result,$i)]."</td>";
				}
			echo"</tr>";
		}
	?>
	</table>
	
	<h1>Show Order Item</h1>
	<table>
	<?php
	$result=mysql_query("Select * From Order_Item", $db);
		echo"<tr>";
	for($i=0;$i<mysql_num_fields($result);$i++)
		{
			echo "<th>".mysql_field_name($result,$i)."</th>";
		}
		echo"</tr>";

	while($row = mysql_fetch_array($result))
		{
			echo"<tr>";
			for($i=0;$i<mysql_num_fields($result);$i++)
				{
					echo "<td>".$row[mysql_field_name($result,$i)]."</td>";
				}
			echo"</tr>";
		}
	?>
	</table>
	
	<h1>Show Order</h1>
	<table>
	<?php
	$result=mysql_query("Select * From Orders", $db);
		echo"<tr>";
	for($i=0;$i<mysql_num_fields($result);$i++)
		{
			echo "<th>".mysql_field_name($result,$i)."</th>";
		}
		echo"</tr>";

	while($row = mysql_fetch_array($result))
		{
			echo"<tr>";
			for($i=0;$i<mysql_num_fields($result);$i++)
				{
					echo "<td>".$row[mysql_field_name($result,$i)]."</td>";
				}
			echo"</tr>";
		}
	?>
	</table>
	
	<h1>Show Supplier</h1>
	<table>
	<?php
	$result=mysql_query("Select * From Supplier", $db);
		echo"<tr>";
	for($i=0;$i<mysql_num_fields($result);$i++)
		{
			echo "<th>".mysql_field_name($result,$i)."</th>";
		}
		echo"</tr>";

	while($row = mysql_fetch_array($result))
		{
			echo"<tr>";
			for($i=0;$i<mysql_num_fields($result);$i++)
				{
					echo "<td>".$row[mysql_field_name($result,$i)]."</td>";
				}
			echo"</tr>";
		}
	?>
	</table>

</body>
</html>