<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['rid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Schedule</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['rid']; ?>">
				<input type="hidden" class="form-control" name="email"  value="<?php echo $row['email']; ?>" >
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Date:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="booking_date" min="<?php echo $row['promo_start']; ?>" max="<?php echo $row['promo_end']; ?>"  value="<?php echo $row['booking_date']; ?>">
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

<!-- Edit -->
<div class="modal fade" id="paypal_<?php echo $row['rid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Proceed Paypal Payment</h4></center>
            </div>
            <div class="modal-body">
            <div class="container-fluid">
            
                <input type="hidden" class="form-control" name="id" value="<?php echo $row['rid']; ?>">
                <input type="hidden" class="form-control" name="email"  value="<?php echo $row['email']; ?>" >
              <form class="forms-sample" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            
                               <input type='hidden' name='business'
                                value='sb-i1zfv15707165@business.example.com'> <input type='hidden'
                                name='item_name' value='<?php echo $row['user_id']; ?>'> <input type='hidden'
                                name='item_number' value='<?php echo $row['code']; ?>'> <input type='hidden'
                                name='amount' value='<?php echo $row['price_to_pay']; ?>'> <input type='hidden'
                                name='no_shipping' value='1'> <input type='hidden'
                                name='currency_code' value='PHP'> <input type='hidden'
                                name='notify_url'
                                value='https://juanlendph.online/PROJECTX/VIEW/notify.php'>
                            <input type='hidden' name='cancel_return'
                                value='https://juanlendph.online/PROJECTX/VIEW/cancel.php'>
                            <input type='hidden' name='return'
                                value='https://juanlendph.online/PROJECTX/VIEW/return.php'>
                            <input type="hidden" name="cmd" value="_xclick">
                           
                                <input type="submit" name="pay_now"  id="pay_now" value="PAY NOW" class="btn btn-primary mr-2" style="width:100%;">
                            
                             </form>
            </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="pay_<?php echo $row['rid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Pay Now</h4></center>
            </div>
            <div class="modal-body">
            <div class="container-fluid">
            
            
          <div>
           
        <label><input type="radio" name="colorRadio" value="red"><img src="../../logo/PAYPAL.png"></label>
        <label><input type="radio" name="colorRadio" value="green"><img src="../../logo/GCASH.png"> </label>

        </div>
        <div class="red box" style="display:none;">
            <form action="pay.php" method="POST">
                <input type="hidden" class="form-control" name="id" value="<?php echo $row['rid']; ?>">
                <input type="hidden" class="form-control" name="email"  value="<?php echo $row['email']; ?>" >
                <input type="hidden" name="mode" value="PAYPAL">
                <input type="hidden" name="status" value="VERIFIED">       
                 <div class="row form-group">   
                  <div class="col-sm-12">   
                    <button type="submit" name="edit" class="btn btn-success" style="width:100%;"><span class="glyphicon glyphicon-check"></span>PAY VIA PAYPAL</button> 
                  </div>
                </div>    
            </form>
        </div>
        <div class="green box" style="display:none;">
            <form action="pay.php" method="POST">
                <input type="hidden" class="form-control" name="id" value="<?php echo $row['rid']; ?>">
                <input type="hidden" class="form-control" name="email"  value="<?php echo $row['email']; ?>" >
                <input type="hidden" name="mode" value="GCASH">
                 <input type="hidden" name="status" value="PAID">
                 <img src="../../GCASH.png" style="width:100%;">
                 <br> 
                 <br>  
                 <div class="row form-group">   
                 <div class="col-sm-12">    
                   <button type="submit" name="edit" class="btn btn-success" style="width:100%;"><span class="glyphicon glyphicon-check"></span>PAY VIA GCASH</button> 
                </div>
                </div>   
            </form>
        </div>
    


            </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>    
            </div>
        </div>
    </div>
</div>




<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['rid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Cancel Book</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Cancel</p>
				<h2 class="text-center"><?php echo $row['promo_name']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                <a href="delete.php?rid=<?php echo $row['rid']; ?>&email=<?php echo $row['email']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Cancel</a>
            </div>

        </div>
    </div>
</div>