<?php
$mysql_username = '1084580';
$mysql_password = 'logoutomg';
$mysql_db = '1084580';
$mysql_host = 'localhost';
$sql_connection = mysql_connect($mysql_host,$mysql_username,$mysql_password);
$sql_db_property = mysql_select_db($mysql_db);
if(!$sql_connection||!mysql_select_db($mysql_db))
{
	echo 'Couldn\'t connected<br>';
	die();
}
/*else
{
	//echo 'connected<br>';
}*/
?>
