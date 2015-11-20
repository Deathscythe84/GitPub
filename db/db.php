<?php

// CONNECT TO DATABASE - use your own username and password
$db = mysql_connect("silva.computing.dundee.ac.uk", "15ac3u01", "132acb");
// SELECT DATABASE - use your own database name
mysql_select_db("15ac3d01");
if(!$db){
echo mysql_error() ;
}
else{

}
// CLOSE CONNECTION
//mysql_close($db);
?>