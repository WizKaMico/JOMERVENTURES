<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">

		function delete_confirm(){
	var result = confirm("Are you sure to update clients ?");
	if(result){
		return true;
	}else{
		return false;
	}
}

$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
	
	$('.checkbox').on('click',function(){
		if($('.checkbox:checked').length == $('.checkbox').length){
			$('#select_all').prop('checked',true);
		}else{
			$('#select_all').prop('checked',false);
		}
	});
});


	</script>
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

			<?php 

				include_once('../connection/connection.php');
			     $query = mysqli_query($conn,"SELECT *,proceed_to_pay.id as rid FROM proceed_to_pay LEFT JOIN my_post ON proceed_to_pay.promo_id = my_post.id");

			

				?>

				<form name="bulk_action_form" action="add.php" method="post" onSubmit="return delete_confirm();"/>		

				<select class="form-control" name="reason">
					<option value="REMAINING_DAYS">REMAINING DAYS</option>
					<option value="STATUS ">STATUS</option>
					<option value="PAYMENT">PAYMENT UNPAID</option>
					<option value="PAYMENT_PAID">PAYMENT PAID</option>
				</select>

				<br>
				<input type="submit" class="btn btn-success" name="bulk_update_submit" value="UPDATE" style="width:100%; background-color:#4b49ac; border-color:#4b49ac;" />
				<br>
				<br>
		
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						 <th><input type="checkbox" name="select_all" id="select_all" value=""/></th> 
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
						
					</thead>
					<tbody>

						<?php
			            if(mysqli_num_rows($query) > 0){
			                while($row = mysqli_fetch_assoc($query)){

			                	$now = time(); // or your date as well
								$your_date = strtotime($row['booking_date']);
									$datediff =  $your_date - $now;
                                $date_check = round($datediff / (60 * 60 * 24));
			        ?>
						<input type="hidden" name="days" value="<?php if($datediff < 0){ echo abs($date_check); echo 'days ago'; }else{ echo abs($date_check); echo 'days before'; } ?>"/>
			      
						<?php 
								echo 
								"<tr>
								 <td align='center'><input type='checkbox' name='checked_id[]' class='checkbox' value='".$row['id']."'/></td> 
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
									
								</tr>";
								
							} }else{
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

						    <tr><td colspan="11">No records found.</td></tr> 

						<?php } ?>    
					</tbody>
				</table>
			</div>
		</form>
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