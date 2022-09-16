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
      <div class="container-fluid">

               <div class="pull-right">


                    <!-- Page Heading -->
                    <h1 class="h3 mb-3 text-gray-800">SUBSCRIBER COLLECTION LIST</h1>
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                          <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
                           <a href="print/costumer_print.php" class="btn btn-success btn-sm btn-flat"><span class="glyphicon glyphicon-print"></span> Print</a>
                  
                        </div>

                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="115%" cellspacing="0">
                                    <thead>
                                        <tr>
               
                
                  <th style="text-align: center">COSTUMER NAME</th>
                  <th style="text-align: center">ADDRESS</th>             
                  <th style="text-align: center">PRICE</th>
                  <th style="text-align: center">BALANCE</th>
                   <th style="text-align: center">AMOUNT TO BE PAID</th>
                   <th style="text-align: center">AMOUNT PAID</th>
                   <th style="text-align: center">TOTAL BALANCE</th>
                  <th style="text-align: center">MONTH OF</th> 
                  <th style="text-align: center">DATE PAYMENT</th>
                  <th style="text-align: center">OR NUMBER</th>
                   <th style="text-align: center">STATUS</th>  
                  <th style="text-align: center">TOOLS</th>
                 </tr>
                </thead>
                <tbody>
                 <?php
                   $sql = "SELECT *, outstandingbalance.id AS cosid FROM outstandingbalance ";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                       $price = $row['price'];
                       $total_deduction = $row['balance'];
                       $total_pay = $row['amountpay'];
                       $total_bal = $row['totalbalance'];
                       
                       $net = $price + $total_deduction;
                       $pay = $total_pay;
                       $bal = $net - $pay;

                      ?>


                         <tr>
                         
                        
                     
                   
                            
                            <td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                           
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['balance']; ?></td>
                              <?php
                         echo "
                       
                          <td>".number_format($net, 2)."</td>
                          <td>".number_format($pay, 2)."</td>
                          <td>".number_format($bal, 2)."</td>
                      
                      ";
                    ?>


                          <td><?php echo $row['tomonthof']; ?></td>
                          <td><?php echo $row['datepayment']; ?></td>
                           <td><?php echo $row['ornumber']; ?></td>

                         

                           <?php
                            $status=$row['status'];
                            if($status=="UNPAID")
                            {
                            $color="color:red";
                            }
                            else if($status=="PAID")
                            {
                            $color="color:green";
                            }
                            else if($status=="PARTIAL")
                            {
                            $color="color:black";
                            }
                            else 
                            {
                            $color="color:red";
                            }
                            echo "<td style='$color'>".$status ."</td>";
                           

                            ?>
                   





                       
                          <td>
                            <button class="btn btn-success btn-sm edit btn-flat" data-id="<?php echo $row['cosid']; ?>"><i class="fa fa-edit"></i> Edit</button>
                            <button class="btn btn-danger btn-sm delete btn-flat" data-id="<?php echo $row['cosid']; ?>"><i class="fa fa-trash"></i> Delete</button>
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

    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/costumercollectionbalance_modal.php'; ?>
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


   $("#reservation").on('change', function(){
    var range = encodeURI($(this).val());
    window.location = 'costumercollectionbalance.php?range='+range;
  });
});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'costumercollectionbalance_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      console.log(response);
       $('.cosid').val(response.cosid);
       $('.costumer_id').html(response.costumer_id);
       $('#costumer_name').html(response.firstname+' '+response.lastname);
      $('.datebalance').html(response.datebalance);
      $('.costumer_name').html(response.firstname+' '+response.lastname);
      $('#edit_amount').val(response.amount);
      $('#edit_balance').val(response.balance);
      $('#edit_status').val(response.status);
      $('#edit_ornumber').val(response.ornumber);
      $('#datepicker_edit').val(response.datepayment);
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

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>
</html>
