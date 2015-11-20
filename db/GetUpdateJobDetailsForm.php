<?php 
session_start();
include "db.php";

$JID = $_POST["JobID"];

// SQL Insert using variable names
$Query = "select * From viewjobdetails Where Job_ID =".$JID;

$result = mysql_query($Query,$db);
mysql_close($db);

$row = mysql_fetch_row($result);

echo
"<label for='Title'>Job Title:</label>
<input type='text' id='Title' pattern='[A-Za-z\s]+' title='Can only contain letters' value=\"".$row[1]."\" required />
<label for='Rate'>Job Rate:</label> 
<input type='text' id='Rate' pattern='[0-9.]+' title='Can only contain numbers' value=\"".$row[2]."\" required />
</br></br>
<input type='submit' value='Update' />";
?>