<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">NEW POST</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>PROMO NAME</h5>
						<input type="text" class="form-control" name="promo_name" placeholder="PROMO NAME" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>PROMO START</h5>
						<input type="date" class="form-control" name="promo_start"  required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>PROMO END</h5>
						<input type="date" class="form-control" name="promo_end" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>PROMO PRICE</h5>
						<input type="number" class="form-control" name="promo_price" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>PROMO MIN PAX</h5>
						<input type="number" class="form-control" name="min_pax" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>PROMO MAX PAX</h5>
						<input type="number" class="form-control" name="max_pax" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>DESTINATION PROVINCE</h5>
						<select id="province" class="form-control" name="destination_province" required></select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>DESTINATION CITY</h5>
						<select id="city" class="form-control" name="destination_city" required></select>		
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>DESCRIPTION</h5>
					    <textarea class="form-control" name="description" rows="5" cols="10"></textarea>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>FILE</h5>
					    <input type="file" class="form-control" name="photo" required>
					</div>
				</div>
			

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>