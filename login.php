<?php 
session_start();

$UID = $_POST["LUser"];
$Pass = $_POST["LPass"];

include "db\db.php";
$loginquery = "Select S.Pub_ID, S.Password, J.Access_Level From Staff S INNER JOIN Job J ON J.Job_ID = S.Job_ID where Staff_ID = ".$UID;
$loginresult = mysql_query($loginquery,$db);
echo $loginresult;

$row = mysql_fetch_array($loginresult);
if(!$row)
{
	header('Location:index.php');
}
else
{
	if($row["Password"]==$Pass)
		{
			$_SESSION["Login"]=true;
			$_SESSION["UserID"]=$UID;
			$_SESSION["PubID"]=$row["Pub_ID"];
			$_SESSION["AccLev"]=$row["Access_Level"];
			header('Location:home.php');
		}
		else
		{
			header('Location:index.php');
		}
}
?>