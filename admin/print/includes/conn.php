<?php
	$conn = new mysqli('localhost', 'root', '', 'apsystemtest');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>