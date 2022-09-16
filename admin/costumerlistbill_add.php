<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$macaddress = $_POST['macaddress'];
		$branch = $_POST['branch'];
		$plan = $_POST['plan'];
		$status = $_POST['status'];
		

		
		//creating costumerid
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
		
		$sql = "INSERT INTO costumer (costumer_id, firstname, lastname, address,contact, branch, plan, macaddress, status,created_on) VALUES ('$costumer_id','$firstname', '$lastname', '$address', '$contact', '$branch', '$plan','$macaddress', '$status', NOW())";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Costumer added successfully';
			
				$_SESSION['macaddress'] = 'duplicate';
		
		}
		else{
			$_SESSION['error'] = $conn->error;


		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: costumerlistbill.php');
?>