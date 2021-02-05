<?php
/* 
File ini berisi script untuk koneksi ke database dengan Mysqli
 @ author Eri
	$dbServer	="localhost";	-> nama server database
	$dbUser		="root";	-> user MySQL
	$dbPass		="";		-> password MySQL
	$dbName		="";		-> Nama Database
*/

$usedDB		= TRUE;
$DBServer	= "localhost";
$DBUser		= "root";	
$DBPass		= "";		
$DBName		= "spk_pilihprodi";
$db = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
 
// check connection
if ($db->connect_error) {
  trigger_error('Database connection failed: '  . $db->connect_error, E_USER_ERROR);
}
?>






