<?php 
	require_once "config.php";
	$dbname =$config['dbname'];
	$username = $config['dbuser'];
	$password = $config['dbpass'];
	$host = $config['dbhost'];
	try {
    $conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}	
	catch(PDOException $e) {
    	echo 'ERROR: ' . $e->getMessage();
	}


 ?>