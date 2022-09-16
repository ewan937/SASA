<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$branch = $_POST['branch'];
		$status = $_POST['status'];
		
		//creating employeeid
		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 1; $i < 10; $i++){
			$numbers .= $i;
		}
		$costumer_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		//
		
		$sql = "INSERT INTO costumercable (costumer_id, firstname, lastname, address,contact, branch, status,created_on) VALUES ('$costumer_id','$firstname', '$lastname', '$address', '$contact', '$branch','$status', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Costumer added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: costumercable.php');
?>