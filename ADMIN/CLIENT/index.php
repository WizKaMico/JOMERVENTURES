<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
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
</head>
<body>
<div class="container">
		<div class="col-sm-12 col-sm-offset-2">
			
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
			</div>
			
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>REF#</th>
						<th>DATE</th>
					    <th>FULLNAME</th>
						<th>PHONE</th>
						<th>TOTAL</th>
						<th>PICKUP</th>
						<th>PROMO</th>
						<th>PAX</th>
						<th>DAYS</th>
						<th>STATUS</th>
						<th>ACTION</th>
					</thead>
					<tbody>
						<?php
							include_once('../connection/connection.php');
							$sql = "SELECT *,proceed_to_pay.id as rid FROM proceed_to_pay LEFT JOIN my_post ON proceed_to_pay.promo_id = my_post.id";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								$now = time(); // or your date as well
								$your_date = strtotime($row['booking_date']);
									$datediff =  $your_date - $now;
                                $date_check = round($datediff / (60 * 60 * 24));

								// echo round($datediff / (60 * 60 * 24));
								echo 
								"<tr>
									<td>".$row['code']."</td>
									<td>".$row['booking_date']."</td>
									<td>".$row['fullname']."</td>
									<td>".$row['phone']."</td>
									<td>".$row['price_to_pay']."</td>
									<td>".$row['pickup']."</td>
									<td>".$row['promo_name']."</td>
									<td>".$row['pax']."</td>"; 
										if($datediff < 0){ 
									   echo "<td>".abs($date_check)." days ago</td>";
									}else{
									   echo "<td>".abs($date_check)." days before</td>";  
									}   
								echo "<td>".$row['status']."</td>
									<td>";

									   
									    echo "
									    <a href='#status_".$row['rid']."' class='btn btn-success btn-sm' data-toggle='modal'  style='background-color:#504b8e; border-color:#504b8e;'><span class='glyphicon glyphicon-edit'></span></a>
										<a href='#edit_".$row['rid']."' class='btn btn-success btn-sm' data-toggle='modal'  style='background-color:#504b8e; border-color:#504b8e;'><span class='glyphicon glyphicon-calendar'></span></a>
										<a href='#delete_".$row['rid']."' class='btn btn-danger btn-sm' data-toggle='modal'  style='background-color:#504b8e; border-color:#504b8e;'><span class='glyphicon glyphicon-trash'></span></a> ";

									   
									echo "</td>
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
	

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
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