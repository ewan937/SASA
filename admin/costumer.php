<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<?php
  include 'timezone.php';
  $range_to = date('m/d/Y');
  $range_from = date('m/d/Y', strtotime('-30 day', strtotime($range_to)));
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/header.php'; ?>
  <?php include 'includes/topbar.php'; ?>
  <?php include 'includes/sidebar.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        COSTUMER INTERNET LIST
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li></li>
        <li class="active">Costumer List</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
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
      <div class="row">
        <div class="col-xs-14">
          <div class="box">

            <div class="box-header with-border">
               <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> New</a>
               <div class="pull-right">

              <a href="costumer_print.php" class="btn btn-success btn-sm btn-flat"><span class="glyphicon glyphicon-print"></span> Print</a>
            </div>
            </div>
            </div>
                </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                
                  <th>Name</th>
                  <th>Address</th>
                  <th>Contact</th>
                  <th>Branch</th>
                  <th>Plan</th>
                  <th>Macaddress</th>
                  <th>Status</th>
                  <th>Dateinstalled</th>
                  <th>Datedisconnected</th>
                  <th>Datereconnected</th>
                  <th>Tools</th>
                </thead>
                <tbody>

                  <?php
                    $sql = "SELECT *, costumer.id AS cosid FROM costumer";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                     
                
                      ?>


                        <tr>
                         
                          
                          <td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
                          <td><?php echo $row['address']; ?></td>
                          <td><?php echo $row['contact']; ?></td>
                          <td><?php echo $row['branch']; ?></td>
                          <td><?php echo $row['plan']; ?></td>
                          <td><span style="color: green;"><?php echo $row['macaddress']; ?></td>
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
                          <td><span style="color: red;"><?php echo $row['datedisconnected']; ?></td>
                          <td><?php echo $row['datereconnected']; ?></td>
                           
                        
                       
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
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/costumer_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
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
    url: 'costumer_row.php',
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
</body>
</html>
