<?php 
include "db.php";
// get content from form

$DrinkID = (int) $_POST["DrinkID"];

// SQL Insert using variable names
//$CompListQuery = "select Component_ID,Component_Name From Component where Component_ID IN (Select Component_ID From Drink_Component Where Drink_ID =".$DrinkID.")";

$CompListQuery = "select * from componentsdrink Where `DID` =".$DrinkID;



$CompListResult = mysql_query($CompListQuery,$db);
mysql_close($db);

echo "<option value=''></option>";
while($comprow = mysql_fetch_array($CompListResult))
{
//echo "<option value=".$comprow['Component_ID'].">".$comprow['Component_Name']."</option>";
echo "<option value=".$comprow['CompID'].">".$comprow['CompName']."</option>";
}
?>