
<?php

	include_once('../connection/connection.php');
	if(ISSET($_POST['add'])){
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$promo_name = $_POST['promo_name'];
		$promo_start = $_POST['promo_start'];
		$promo_end = $_POST['promo_end'];
		$promo_price = $_POST['promo_price'];
		$min_pax = $_POST['min_pax'];
		$max_pax = $_POST['max_pax'];
		$destination_province = $_POST['destination_province'];
		$destination_city = $_POST['destination_city'];
		$description = $_POST['description'];
		date_default_timezone_set('Asia/Manila');
		$date_created = date('Y-m-d');
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		if(!is_dir("./upload"))
			mkdir("upload");
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				mysqli_query($conn, "INSERT INTO `my_post` (promo_name, promo_start, promo_end, promo_price, min_pax, max_pax, destination_province, destination_city,description, photo, date_created) VALUES('$promo_name', '$promo_start', '$promo_end','$promo_price','$min_pax','$max_pax','$destination_province','$destination_city','$description','$path','$date_created')") or die(mysqli_error());
				echo "<script>alert('Promo saved!')</script>";
				header("location: index.php");
			}	
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>