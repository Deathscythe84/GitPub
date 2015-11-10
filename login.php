<?php 
session_start();

$UID = $_POST["LUser"];
$Pass = $_POST["LPass"];

include "db\db.php";
$loginquery = "Select Password From Staff where Staff_ID = ".$UID;
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
			header('Location:home.php');
		}
		else
		{
			header('Location:index.php');
		}
}
?>