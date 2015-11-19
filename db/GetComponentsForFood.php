<?php 
include "db.php";
// get content from form

$FoodID = (int) $_POST["FoodID"];

// SQL Insert using variable names
//$CompListQuery = "select Component_ID,Component_Name From Component where Component_ID IN (Select Component_ID From Food_Component Where Food_ID =".$FoodID.")";

$CompListQuery = "select * from componentsfood Where `FID` =".$FoodID;

$CompListResult = mysql_query($CompListQuery,$db);


mysql_close($db);

echo "<option value=''></option>";
while($comprow = mysql_fetch_array($CompListResult))
{

//echo "<option value=".$comprow['Component_ID'].">".$comprow['Component_Name']."</option>";
echo "<option value=".$comprow['CompID'].">".$comprow['CompName']."</option>";

}
?>