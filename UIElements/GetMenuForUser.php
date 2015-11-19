<?php 
session_start();

$AccLev = $_SESSION["AccLev"];

Switch ($AccLev)
{
	Case 0:
	{
		include "MenuForUser.php";
		break;
	}
	Case 1:
	{
		include "MenuForManager.php";
		break;
	}
	Case 2:
	{
		include "MenuForMD.php";
		break;
	}
	Case 3:
	{
		include "MenuForAdmin.php";
		break;
	}
}
?>