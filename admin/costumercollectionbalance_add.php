<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$costumer = $_POST['costumer'];
		$amount = $_POST['amount'];
		$balance = $_POST['datebalance'];
		$status = $_POST['status'];
		$datepayment = $_POST['paymentdate'];

		
		$sql = "SELECT * FROM costumer WHERE id = '$costumer'";
		$query = $conn->query($sql);
		if($query->num_rows < 1){
			$_SESSION['error'] = 'Costumer not found';
		}
		else{
			$row = $query->fetch_assoc();
			$costumer_id = $row['id'];
			$sql = "INSERT INTO outstandingbalance (costumer_id, datebalance, balance,status1,paymentdate) VALUES ('$costumer_id','$balance' , '$amount','$status','$datepayment')";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Costumer Balance added successfully';
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: costumercollectionbalance.php');

?>