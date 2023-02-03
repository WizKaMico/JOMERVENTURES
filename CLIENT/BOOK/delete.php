<?php
	session_start();
		include_once('../../ADMIN/connection/connection.php');

	if(isset($_GET['rid'])){
		$email = $_GET['email'];
		$sql = "UPDATE proceed_to_pay SET status = 'CANCELLED' WHERE id = '".$_GET['rid']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Cancelled successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: index.php?email='.$email);
?>