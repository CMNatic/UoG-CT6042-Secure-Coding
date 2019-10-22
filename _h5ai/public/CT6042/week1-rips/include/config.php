<?php
	$servername = "localhost";
	$username = "ct6042";
	$password = "ct6042";
	$dbname = "week_one";

	$connection = new mysqli($servername, $username, $password, $dbname);

	if($connection->connect_error) {
		echo $connection->connect_error;
	}
?>
