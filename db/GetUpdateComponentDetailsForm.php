<?php 
session_start();
include "db.php";

$CID = $_POST["CompID"];

// SQL Insert using variable names
$Query = "select * From listcompdetails Where Component_ID =".$CID;

$result = mysql_query($Query,$db);
mysql_close($db);

$row = mysql_fetch_row($result);

echo
"<label for='componentName'>Component Name:</label>
<input type='text' pattern='[A-Za-z\s]+' title='Can only contain letters' value=\"".$row[1]."\" required id='componentName' placeholder='...'/>
<label for='componentPrice'>Price:</label>
<input type='number' step='0.01' pattern='[0-9]+' title='Can only contain numbers' value=\"".$row[2]."\" required id='componentPrice' placeholder='...'/>
</br>
<input type='submit' value='Update'>";
?>