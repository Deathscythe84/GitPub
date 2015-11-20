<?php 
session_start();
 
include "db.php";

$PID = $_SESSION["PubID"];

// SQL Insert using variable names
$EntertainmentTableQuery = "Select * From viewentertainment Where Pub_ID = $PID";
$EntertainmentTableResult = mysql_query($EntertainmentTableQuery,$db);
mysql_close($db);


echo "<tr><th>Type</th><th>Name</th><th>Cost</th><th>Duration</th></tr>";
while($row = mysql_fetch_array($EntertainmentTableResult))
{
echo "<tr><td>".$row['Entertainment_Type']."</td><td>".$row['Entertainment_Name']."</td><td>".$row['Entertainment_Cost']."</td><td>".$row['Cost_Duration']."</td></tr>";
}
?>