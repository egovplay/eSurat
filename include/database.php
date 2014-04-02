<?php
ini_set("display_errors","On");

// untuk local testing

	$db_host = "localhost"; // database host
	$db_name = "perpus"; // database name
	$db_user = "root"; // database user
	$db_pass = ""; // database user password
	$baseurl = strtok($_SERVER["REQUEST_URI"],'?');
	
// hapus komentar untuk production

/*
	$db_host = ""; // database host
	$db_name = ""; // database name
	$db_user = ""; // database user
	$db_pass = ""; // database user password
*/

// set connection
$conn = @mysql_connect($db_host,$db_user,$db_pass);

// cek apakah $conn sukses atau gagal
if (!$conn) 
{
	die('Could not connect: ' . mysql_error());
}

else
{
	mysql_select_db($db_name, $conn);
}

// end file config/database.php