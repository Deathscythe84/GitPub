<?php 
session_start();
include "db.php";

$SID = $_SESSION["UserID"];

// SQL Insert using variable names
$Query = "select * From listpersonaldetails Where Staff_ID =".$SID;
$result = mysql_query($Query,$db);
mysql_close($db);

$row = mysql_fetch_row($result);

echo
"
<input type='text' id='FName' Placeholder='First Name' pattern='[A-Za-z]+' title='Can only contain letters' value=\"".$row[1]."\" required />
<input type='text' id='SName' Placeholder='Surname' pattern='[A-Za-z]+' title='Can only contain letters' value=\"".$row[2]."\" required />
<input type='date' id='DOB' Placeholder='DOB' pattern='[0-9].{3}-[0-9].{1}-[0-9].{1}' title='YYYY-MM-DD' value=\"".$row[3]."\" />
<input type='text' id='Address' Placeholder='Address' pattern='[A-Za-z0-9\s]+' title='Can only contain letters' value=\"".$row[4]."\" />
<input type='text' id='City' Placeholder='City' pattern='[A-Za-z]+' title='Can only contain letters' value=\"".$row[5]."\" />
<input type='text' id='Postcode' Placeholder='Postcode' pattern='[A-Za-z0-9]+' title='Can only contain letters and numbers' value=\"".$row[6]."\" />
<input type='text' id='Sortcode' Placeholder='Sort Code' pattern='[0-9].{5}' title='Must contain 6 numbers' value=\"".sprintf( '%06d', $row[7])."\" />
<input type='text' id='AccNumber' Placeholder='AccNumber' pattern='[0-9].{7}' title='Must contain 8 numbers' value=\"".sprintf( '%08d', $row[8])."\" />

</br><input type='submit' value='Update' />";
?>