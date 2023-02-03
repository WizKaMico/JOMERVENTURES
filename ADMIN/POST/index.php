<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation using PHP/MySQLi with DataTable and PDF Generator using TCPDF</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<script src="prov_js/city.js"></script>
	 <script src="https://cdn.tiny.cloud/1/d9fwmjqjuumb15lwtfor99yfqmq4w0pvvzlhmri6pnhy6xnx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
	 
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
	<script>	
window.onload = function() {	

	// ---------------
	// basic usage
	// ---------------
	var $ = new City();
	$.showProvinces("#province");
	$.showCities("#city");

	// ------------------
	// additional methods 
	// -------------------

	// will return all provinces 
	console.log($.getProvinces());
	
	// will return all cities 
	console.log($.getAllCities());
	
	// will return all cities under specific province (e.g Batangas)
	console.log($.getCities("Batangas"));	
	
}
</script>
</head>
<body>
<div class="container">
	
		<div class="col-sm-12 col-sm-offset-2">
		
			</div>
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary" style="background-color:#504b8e; border-color:#504b8e;"><span class="glyphicon glyphicon-plus"></span> ADD NEW POST</a>
			</div>
			<div class="height10">
			</div>
			<div class="row">
					<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>PHOTO</th>
						<th>PROMO NAME</th>
						<th>PROMO START</th>
						<th>PROMO END</th>
						<th>PROMO PRICE</th>
						<th>DESTINATION</th>
						<th>ACTION</th>
					</thead>
					<tbody>
						<?php
							include_once('../connection/connection.php');
							$sql = "SELECT * FROM my_post";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
								   <td><img src='".$row['photo']."' style='width:50%; height:50px;'></td>
									<td>".$row['promo_name']."</td>
									<td>".$row['promo_start']."</td>
									<td>".$row['promo_end']."</td>
									<td>₱ ".$row['promo_price']." /individual</td>
									<td>".$row['destination_province'].",".$row['destination_city']."</td>
									<td>
									<a href='#' class='btn btn-success btn-sm' style='background-color:#504b8e; border-color:#504b8e;'><span class='glyphicon glyphicon-share'></span></a>
										<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal' style='background-color:#504b8e; border-color:#504b8e;'><span class='glyphicon glyphicon-edit'></span></a>
										<a href='#photo_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal' style='background-color:#504b8e; border-color:#504b8e;'><span class='glyphicon glyphicon-picture'></span></a>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal' style='background-color:#504b8e; border-color:#504b8e;'><span class='glyphicon glyphicon-trash'></span></a>
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}
							/////////////////

							//use for MySQLi Procedural
							// $query = mysqli_query($conn, $sql);
							// while($row = mysqli_fetch_assoc($query)){
							// 	echo
							// 	"<tr>
							// 		<td>".$row['id']."</td>
							// 		<td>".$row['firstname']."</td>
							// 		<td>".$row['lastname']."</td>
							// 		<td>".$row['address']."</td>
							// 		<td>
							// 			<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
							// 			<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
							// 		</td>
							// 	</tr>";
							// 	include('edit_delete_modal.php');
							// }
							/////////////////

						?>
					</tbody>
				</table>
			</div>
         </div>
<?php include('add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>


<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
  </script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</html>