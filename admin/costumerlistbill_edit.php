<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$branch = $_POST['branch'];
		$plan = $_POST['plan'];
		$macaddress = $_POST['macaddress'];
		$status = $_POST['status'];
		$dateinstalled = $_POST['dateinstalled'];
		$datedisconnected = $_POST['datedisconnected'];
		$datereconnected = $_POST['datereconnected'];
		$monthof = $_POST['monthof'];
		$tomonthof = $_POST['tomonthof'];
		$price = $_POST['price'];

		$letters = '';
		$numbers = '';
		foreach (range('A', 'Z') as $char) {
		    $letters .= $char;
		}
		for($i = 1; $i < 10; $i++){
			$numbers .= $i;
		}
		$costumer_id = substr(str_shuffle($letters), 0, 3).substr(str_shuffle($numbers), 0, 9);
		
		$sql = $sql = "INSERT INTO outstandingbalance (costumer_id, firstname, lastname, address,contact, plan, macaddress, status, dateinstalled, monthof, tomonthof, price) VALUES ('$costumer_id','$firstname', '$lastname', '$address', '$contact','$plan','$macaddress', '$status','$dateinstalled','$monthof','$tomonthof','$price')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Costumer Bill Added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select costumer to edit first';
	}

	header('location: costumercollectionbalance.php');
?>