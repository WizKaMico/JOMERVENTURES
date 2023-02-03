<?php
	include('../connection/connection.php'); 
    date_default_timezone_set('Asia/Manila');
    $date_today = date('Y-m-d'); 
	header('Content-Type: text/csv; charset=UTF-8');
	header('Content-Disposition: attachment; filename=daily.csv');
 
	$output = fopen("php://output", "w");
	fputcsv($output, array('email', 'phone', 'fullname', 'booking_date', 'price', 'pax', 'price_to_pay', 'pick_up', 'code'));
	$query = $conn->query("SELECT * FROM proceed_to_pay WHERE status = 'PAID' AND YEAR(CAST(date_created AS DATE))");
	while($fetch = $query->fetch_assoc()){
		fputcsv($output, $fetch);
	}
 
	fclose($output);
?>