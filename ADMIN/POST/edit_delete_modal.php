<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Promo</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>PROMO NAME</h5>
						<input type="text" class="form-control" name="promo_name"  value="<?php echo $row['promo_name']; ?>"  required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>PROMO START</h5>
						<input type="date" class="form-control" name="promo_start"  value="<?php echo $row['promo_start']; ?>"  required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>PROMO END</h5>
						<input type="date" class="form-control" name="promo_end" value="<?php echo $row['promo_end']; ?>"  required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>PROMO PRICE</h5>
						<input type="number" class="form-control" name="promo_price" value="<?php echo $row['promo_price']; ?>"  required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>PROMO MIN PAX</h5>
						<input type="number" class="form-control" name="min_pax"  value="<?php echo $row['min_pax']; ?>" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>PROMO MAX PAX</h5>
						<input type="number" class="form-control" name="max_pax"  value="<?php echo $row['max_pax']; ?>" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>DESCRIPTION</h5>
					    <textarea class="form-control" name="description" rows="5" cols="10" required><?php echo $row['description']; ?></textarea>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- photo -->
<div class="modal fade" id="photo_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Photo</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit_photo.php" enctype="multipart/form-data">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<input type="hidden" name="previous" value="<?php echo $row['photo']?>"/>
				<div class="row form-group">
					<div class="col-sm-12">
						<center><img src="<?php echo $row['photo']; ?>" style="width:50%; height:auto;"></center>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-12">
						<h5>NEW FILE</h5>
						<input type="file" class="form-control" name="photo" value="<?php echo $row['photo']?>" required="required"/>
					</div>
				</div>
			
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Promo</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo strtoupper($row['promo_name']); ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>