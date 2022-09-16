<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Add Costumer</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="costumer_add.php" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="firstname" class="col-sm-3 control-label">Firstname</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="firstname" name="firstname" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="lastname" class="col-sm-3 control-label">Lastname</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="lastname" name="lastname" required>
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="address" class="col-sm-3 control-label">Address</label>

                  	<div class="col-sm-9">
                      <textarea class="form-control" name="address" id="address"></textarea>
                  	</div>
                </div>
            

                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                </div>


                <div class="form-group">
                    <label for="macaddress" class="col-sm-3 control-label">Macaddress</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="macaddress" name="macaddress" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="branch" class="col-sm-3 control-label">Branch</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="branch" id="branch" required>
                        <option value="" selected>- Select Branch -</option>
                        <option value="TALAVERA">TALAVERA</option>
                        <option value="ALIAGA">ALIAGA</option>
                        <option value="LICAB">LICAB</option>
                        <option value="QUEZON">QUEZON</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="plan" class="col-sm-3 control-label">Plan</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="plan" id="plan" required>
                        <option value="" selected>- Select Plan -</option>
                        <option value="20 MBPS">20 MBPS</option>
                        <option value="30 MBPS">30 MBPS</option>
                        <option value="40 MBPS">40 MBPS</option>
                        <option value="50 MBPS">50 MBPS</option>
                      </select>
                    </div>
                </div>


                 <div class="form-group">
                    <label for="status" class="col-sm-3 control-label">Status</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="status" id="status" required>
                        <option value="" selected>- Select Status -</option>
                        <option value="ACTIVE">ACTIVE</option>
                        <option value="DISCONNECTED">DISCONNECTED</option>
                        <option value="NOT FINISH">NOT FINISH</option>
                        <option value="COMPLEMENTARY">COMPLEMENTARY</option>
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
            	<h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="costumerlistbill_edit.php">
            		<input type="hidden" class="cosid" name="id">
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname"readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_lastname" name="lastname"readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" name="address" id="edit_address"readonly></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="edit_contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_contact" name="contact"readonly>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="edit_branch" class="col-sm-3 control-label">Branch</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_branch" name="branch"readonly>
                    </div>
                </div>

                 <div class="form-group">
                    <label for="edit_plan" class="col-sm-3 control-label">Plan</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_plan" name="plan"readonly>
                    </div>
                </div>


               

                <div class="form-group">
                    <label for="edit_macaddress" class="col-sm-3 control-label">Macaddress</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_macaddress" name="macaddress"readonly>
                    </div>
                </div>

              
                <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Dateinstalled</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="datepicker_edit" name="dateinstalled"readonly >
                      </div>
                    </div>
                </div>

                <div class="modal-body">
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
                    <label for="edit_tomonthof" class="col-sm-3 control-label">From Month Of</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="tomonthof" id="edit_tomonthof">
                        <option value="" selected>- Select Month -</option>
                        <option value="JANUARY">JANUARY</option>
                        <option value="FEBRUARY">FEBRUARY</option>
                        <option value="MARCH">MARCH</option>
                        <option value="APRIL">APRIL</option>
                        <option value="MAY">MAY</option>
                        <option value="JUNE">JUNE</option>
                        <option value="JULY">JULY</option>
                        <option value="AUGUST">AUGUST</option>
                        <option value="SEPTEMBER">SEPTEMBER</option>
                        <option value="OCTOBER">OCTOBER</option>
                        <option value="NOVEMBER">NOVEMBER</option>
                        <option value="DECEMBER">DECEMBER</option>  
                      </select>
                    </div>
                    </div>

                      <div class="form-group">
                    <label for="edit_price" class="col-sm-3 control-label">Price</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="price" id="edit_price">
                        <option value="" selected>- Select Price -</option>
                        <option value="1200">1200</option>
                        <option value="1400">1400</option>
                        <option value="1700">1700</option>
                        <option value="1900">1900</option>
                      </select>
                    </div>
                    </div>



                    

                   
                </div>

              
             
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            	<button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Add</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


<!-- Addnew -->
<div class="modal fade" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="costumerlistbill_add.php">
                    <input type="hidden" class="cosid" name="id">
                <div class="form-group">
                    <label for="add_firstname" class="col-sm-3 control-label">Firstname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="add_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="add_lastname" class="col-sm-3 control-label">Lastname</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="add_lastname" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="add_address" class="col-sm-3 control-label">Address</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" name="address" id="add_address"></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="add_contact" class="col-sm-3 control-label">Contact Info</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="add_contact" name="contact">
                    </div>
                </div>

                 <div class="form-group">
                    <label for="add_branch" class="col-sm-3 control-label">Branch</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="branch" id="add_branch">
                        <option value="" selected>- Select Branch -</option>
                        <option value="TALAVERA">TALAVERA</option>
                        <option value="ALIAGA">ALIAGA</option>
                          <option value="LICAB">LICAB</option>
                            <option value="QUEZON">QUEZON</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="add_plan" class="col-sm-3 control-label">Plan</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="plan" id="add_plan">
                        <option value="" selected>- Select Plan -</option>
                        <option value="20 MBPS">20 MBPS</option>
                        <option value="30 MBPS">30 MBPS</option>
                          <option value="40 MBPS">40 MBPS</option>
                            <option value="50 MBPS">50 MBPS</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_macaddress" class="col-sm-3 control-label">Macaddress</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_macaddress" name="macaddress">
                    </div>
                </div>

                <div class="form-group">
                    <label for="edit_status" class="col-sm-3 control-label">Status</label>

                    <div class="col-sm-9"> 
                      <select class="form-control" name="status" id="edit_status">
                        <option value="" selected>- Select Status -</option>
                        <option value="ACTIVE">ACTIVE</option>
                        <option value="DISCONNECTED">DISCONNECTED</option>
                          <option value="NOT FINISH">NOT FINISH</option>
                            <option value="COMPLEMENTARY">COMPLEMENTARY</option>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Dateinstalled</label>

                    <div class="col-sm-9"> 
                      <div class="date">
                        <input type="text" class="form-control" id="datepicker_edit" name="dateinstalled">
                      </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="datepicker_edit1" class="col-sm-3 control-label">Datedisconnected</label>

                    <div class="col-sm-9">
                        <div class="date">
                      <input type="text" class="form-control" id="datepicker_edit1" name="datedisconnected">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                    <label for="datepicker_edit2" class="col-sm-3 control-label">Datereconnected</label>

                    <div class="col-sm-9">
                      <div class="date">
                      <input type="text" class="form-control" id="datepicker_edit2" name="datereconnected">
                    </div>
                  </div>
                </div>

             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="add"><i class="fa fa-check-square-o"></i> Update</button>
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
            	<h4 class="modal-title"><b><span class="id"></span></b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="costumer_delete.php">
            		<input type="hidden" class="cosid" name="id">
            		<div class="text-center">
	                	<p>DELETE COSTUMER</p>
	                	<h2 class="bold del_costumer_name"></h2>
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

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="del_employee_name"></span></b></h4>
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>    