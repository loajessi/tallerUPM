<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "metrovinculo";
	$conn = 0;

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
	    die("Falló la conexión: " . mysqli_connect_error());
	}
?>