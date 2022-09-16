<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add Costumer Balance</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="costumercollectionbalance_add.php">
          		  <div class="form-group">
                  	<label for="costumer" class="col-sm-3 control-label">Costumer ID</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="costumer" name="costumer" required>
                  	</div>
                </div>
                <div class="form-group">
                    <label for="balance" class="col-sm-3 control-label">Amount Balance</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="balance" name="balance" required>
                    </div>
                    </div>

                      <div class="form-group">
                     <label for="amount" class="col-sm-3 control-label">Date Balance</label>

                      <div class="col-sm-9"> 
                      <div class="date">

                        <input type="text" class="form-control" id="datepicker_edit" name="datebalance">
                      </div>
                    </div>
                    </div>
                      <div class="form-group">
                        <label for="status" class="col-sm-3 control-label">Status</label>
                         

                    <div class="col-sm-9"> 
                      <select class="form-control" name="status" id="status" required>
                     
                        <option value="20 MBPS 1200PHP">PAID</option>
                        <option value="30 MBPS 1400PHP">30 MBPS 1400PHP</option>
                        <option value="40 MBPS 1700PHP">40 MBPS 1700PHP</option>
                        <option value="50 MBPS 1900PHP">50 MBPS 1900PHP</option>
                      </select>
                   
                </div>

                      </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="costumer_name"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="costumercollectionbalance_edit.php">
            		<input type="hidden" class="cosid" name="id">

                 <div class="form-group">
                    <label for="edit_balance" class="col-sm-3 control-label">Balance</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_balance" name="balance" required>
                    </div>
                    </div>
                        
                 <div class="form-group">
                    <label for="edit_status" class="col-sm-3 control-label">Status</label>
                    <div class="col-sm-9"> 
                      <select class="form-control" name="status" id="edit_status">
                        <option value="" selected>- Select Status -</option>
                        <option value="UNPAID">UNPAID</option>
                        <option value="PAID">PAID</option>
                        <option value="PARTIAL">PARTIAL</option>
                          
                      </select>
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="edit_amountpay" class="col-sm-3 control-label">Amount Paid</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_amountpay" name="amountpay" required>
                    </div>
                    </div>
                <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Datepayment</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="date" class="form-control" id="date" name="datepayment" >
                      </div>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="edit_ornumber" class="col-sm-3 control-label">OR Number</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_ornumber" name="ornumber" required>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b><span class="date"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="cashadvance_delete.php">
            		<input type="hidden" class="caid" name="id">
            		<div class="text-center">
	                	<p>DELETE CASH ADVANCE</p>
	                	<h2 class="employee_name bold"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


     