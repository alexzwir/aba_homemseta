<?php  

	$host = 'localhost';
	$user = 'root';
	$pass = 'root';


	$mysqli = new mysqli($host, $user, $pass, "pelo_bem");

	if (mysqli_connect_errno()) {
    	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}

?>