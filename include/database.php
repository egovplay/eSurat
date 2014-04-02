<?php
ini_set("display_errors","On");

	try {
		$db = new PDO("mysql:host=localhost;dbname=perpus", "root", "");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 
		 
	} catch (PDOException $e) {
		echo "Terjadi Kesalahan..";
		echo $e->getMessage();
	}