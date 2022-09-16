<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$balance = $_POST['balance'];
		$status = $_POST['status'];
		$ornumber = $_POST['ornumber'];
		$amountpay = $_POST['amountpay'];
		$datepayment = $_POST['datepayment'];
		
		


		
		$sql = "UPDATE outstandingbalance SET balance = '$balance', status = '$status', ornumber = '$ornumber', amountpay = '$amountpay' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Collection updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select employee to edit first';
	}

	header('location: costumercollectionbalance.php');
?>