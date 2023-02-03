<?php
	session_start();
	include_once('../../ADMIN/connection/connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$email = $_POST['email'];
		$mode = $_POST['mode'];
		$status = $_POST['status'];

		$sql = "UPDATE proceed_to_pay SET mode = '$mode', status = '$status' WHERE id = '$id' AND email = '$email'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index.php?email='.$email);

?>