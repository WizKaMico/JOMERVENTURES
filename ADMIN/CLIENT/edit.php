<?php
	session_start();
	include_once('../connection/connection.php');

	if(isset($_POST['edit'])){
		$ID = $_POST['ID'];
		$edit_Barangay = $_POST['edit_Barangay'];
		$edit_DateCommitted = $_POST['edit_DateCommitted'];
		$edit_TimeCommitted = $_POST['edit_TimeCommitted'];
		$edit_Year = $_POST['edit_Year'];
		$edit_Month = $_POST['edit_Month'];
		$edit_Day = $_POST['edit_Day'];
		$edit_CrimeClock = $_POST['edit_CrimeClock'];
		$edit_CrimeCommitted = $_POST['edit_CrimeCommitted'];
		$edit_CrimeType = $_POST['edit_CrimeType'];
		$edit_SuspectStatus = $_POST['edit_SuspectStatus'];
		$edit_Gender = $_POST['edit_Gender'];
		$edit_SuspectAge = $_POST['edit_SuspectAge'];
		$edit_CaseStatus = $_POST['edit_CaseStatus'];
		$sql = "UPDATE `clean_data` SET `BARANGAY`='$edit_Barangay',`DATE_COMMITTED`='$edit_DateCommitted',
        `TIME_COMMITTED`='$edit_TimeCommitted',`YEAR`='$edit_Year',`MONTH`='$edit_Month',`DAY`='$edit_Day',
        `CRIME_CLOCK`='$edit_CrimeClock',`CRIME_COMMITTED`='$edit_CrimeCommitted',`CRIME_TYPE`='$edit_CrimeType',
        `SUSPECTS_Status`='$edit_SuspectStatus',`Gender`='$edit_Gender]',`SUSPECTS_Age_CLEAN`='$edit_SuspectAge',
        `CASE_STATUS`='$edit_CaseStatus' WHERE ID = '$ID'";

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