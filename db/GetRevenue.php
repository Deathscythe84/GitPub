<?php 
session_start();
 
include "db.php";

// SQL Insert using variable names
$DemoQuery = "Select * From demo_all";
$DemoResult = mysql_query($DemoQuery,$db);
mysql_close($db);


echo "<tr><th>Demographic </th><th>Information</th></tr>";
echo "<table>";
while($row = mysql_fetch_array($DemoResult))
{

echo "<tr><td>".$row['Pub_Name']."</td><td>".$row['Revenue']."</td><td>".$row['Demographic_Type']."</td>
<td>".$row['Demographic_Value']."</td><td>".$row['Entertainment_Type']."</td><td>".$row['Entertainment_Name']."</td>

</tr>";
}
echo "</table>";
?>