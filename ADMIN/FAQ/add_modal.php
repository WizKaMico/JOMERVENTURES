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
						<h5>QUESTION</h5>
					    <textarea class="form-control" name="question" rows="5" cols="10" required></textarea>
					</div>
				</div>
			    <div class="row form-group">
					<div class="col-sm-12">
						<h5>ANSWER</h5>
					    <textarea class="form-control" name="answer" rows="5" cols="10" required></textarea>
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