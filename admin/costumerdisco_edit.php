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


		
		$sql = "UPDATE costumer SET firstname = '$firstname', lastname = '$lastname', address = '$address', contact = '$contact', branch = '$branch', plan = '$plan', macaddress = '$macaddress', status = '$status', dateinstalled = '$dateinstalled', datedisconnected = '$datedisconnected', datereconnected = '$datereconnected' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Subscriber updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select employee to edit first';
	}

	header('location: costumerdisco.php');
?>