<?php
	// $conn = new mysqli("localhost", "root", "", "skripsi");
	// if(!$conn){
	// 	die("Fatal Error: Connect Error!");
	// }
try {

	$conn = new PDO("mysql:host=localhost;dbname=skripsi", 'wadau', 'icimonji');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// echo "Connected Successfull";
} catch (Exception $e) {
	echo "Connected Failed ".$e->getMassage();
}

?>