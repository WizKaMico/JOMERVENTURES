<?php
	session_start();
	
	include_once('ADMIN/connection/connection.php');
    $code = $_GET['code'];

	if(isset($_GET['code'])){

		$ref = $_POST['ref'];	
		$sql = "UPDATE proceed_to_pay SET status='PAID', ref = '$ref' WHERE code = '".$_GET['code']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member deleted successfully';
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

	header('location: index.php?view=SUCCESS&code='.$code);
?>