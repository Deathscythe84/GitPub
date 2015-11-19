
<?php
include "db/db.php";
	echo "<table>";

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

	echo "</table>";
?>