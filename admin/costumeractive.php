  <?php include 'includes/session.php'; ?>
<?php include ('includes/header.php'); ?>
<?php include ('includes/sidebar.php'); ?>
<?php include ('includes/topbar.php'); ?>

<?php
  include 'timezone.php';
  $range_to = date('m/d/Y');
  $range_from = date('m/d/Y', strtotime('-30 day', strtotime($range_to)));
?>

             
  <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>






 <!-- Begin Page Content -->
                <div class="container-fluid">

               <div class="pull-right">


                    <!-- Page Heading -->
                    <i><h1 class="h3 mb-3 text-gray-800">ACTIVE SUBSCRIBER LIST</h1></i>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
                          <a href="print/costumeractive_print.php" class="btn btn-success btn-sm btn-flat"><span class="glyphicon glyphicon-print"></span> Print</a>
                        </div>
                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center">Name</th>
                                            <th style="text-align: center">Address</th>
                                           
                                            <th style="text-align: center">Plan</th>    
                                            <th style="text-align: center">Status</th>
                                            <th style="text-align: center">Dateinstalled</th>
                                          
                                            <th style="text-align: center">Datereconnected</th>
                                            <th style="text-align: center">Tools</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                    $sql = "SELECT *, costumer.id AS cosid FROM costumer WHERE status = 'ACTIVE'";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                     
                
                      ?>


                        <tr>
                         
                          
                          <td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
                          <td><?php echo $row['address']; ?></td>
                          
                          <td><?php echo $row['plan']; ?></td>
                        
                             <?php
                            $status=$row['status'];
                            if($status=="ACTIVE")
                            {
                            $color="color:green";
                            }
                            else if($status=="DISCONNECTED")
                            {
                            $color="color:red";
                            }
                            else if($status=="NOT FINISH")
                            {
                            $color="color:yellow";
                            }
                            else if($status=="COMPLEMENTARY")
                            {
                            $color="color:blue";
                            }
                            else 
                            {
                            $color="color:red";
                            }
                            echo "<td style='$color'>".$status ."</td>";  
                            ?>

                        
                          <td><?php echo $row['dateinstalled']; ?></td>
                       
                          <td><?php echo $row['datereconnected']; ?></td>
                           
                        
                       
                          <td>
                            <button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $row['cosid']; ?>"><i class="fa fa-edit"></i> Edit</button>
                        
                          </td>
                        </tr>
                      <?php
                    }
                  ?>

                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
             

                <!-- /.container-fluid -->

            </div>

                            
                                             
                              
                 
             
         
    <!-- Footer -->
<?php include ('includes/footer.php'); ?>
<?php include 'includes/costumer_modal.php'; ?>
<?php include ('includes/scripts.php'); ?>
   
       <script>
$(function(){
 $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $('.photo').click(function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

   $("#reservation").on('change', function(){
    var range = encodeURI($(this).val());
    window.location = 'costumer.php?range='+range;
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'costumeractive_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.cosid').val(response.cosid);
      $('.costumer_id').html(response.costumer_id);
      $('.del_costumer_name').html(response.firstname+' '+response.lastname);
      $('#costumer_name').html(response.firstname+' '+response.lastname);
      $('#edit_firstname').val(response.firstname);
      $('#edit_lastname').val(response.lastname);
      $('#edit_address').val(response.address); 
      $('#edit_contact').val(response.contact);
      $('#edit_branch').val(response.branch);
      $('#edit_plan').val(response.plan);
      $('#edit_macaddress').val(response.macaddress);
      $('#edit_status').val(response.status);
      $('#datepicker_edit').val(response.dateinstalled);
      $('#datepicker_edit1').val(response.datedisconnected);
      $('#datepicker_edit2').val(response.datereconnected);
     
    }
  });
}
</script>
    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>



    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>