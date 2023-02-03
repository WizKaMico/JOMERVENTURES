<?php
	session_start();
	include_once('../connection/connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$promo_name = $_POST['promo_name']; 
		$promo_start = $_POST['promo_start'];
		$promo_end = $_POST['promo_end'];
		$promo_price = $_POST['promo_price'];
		$min_pax = $_POST['min_pax'];
		$max_pax = $_POST['max_pax'];
		$description = $_POST['description'];
		$sql = "UPDATE my_post SET promo_name = '$promo_name', promo_start = '$promo_start', promo_end = '$promo_end', promo_price = '$promo_price', min_pax = '$min_pax', max_pax = '$max_pax', description = '$description' WHERE id = '$id'";

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

	header('location: index.php');

?>