<?php include 'includes/session.php'; ?>
<?php include ('includes/header.php'); ?>
<?php include ('includes/sidebar.php'); ?>
<?php include ('includes/topbar.php'); ?>

    
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <i><h4><span style="color: royalblue;"> TOTAL SUBSCRIBER INSTALLED BY MONTH INTERNET</h4></i>
                    </div>
                    <div class="card-body">
                   
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">

                                        <label>FROM DATE</label>
                                        <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>" class="form-control">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>TO DATE</label>
                                        <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label></label> <br>
                                      <button type="submit" class="btn btn-primary">FILTER</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="card shadow mb-4">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                  
                                    <th style="text-align: center">Name</th>
                                    <th style="text-align: center">Address</th>
                                    <th style="text-align: center">Plan</th>
                                    <th style="text-align: center">Status</th>
                                    <th style="text-align: center">Dateinstalled</th>
                                    <th style="text-align: center">Macaddress</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php 
                                $con = mysqli_connect("localhost","root","","apsystem");

                                if(isset($_GET['from_date']) && isset($_GET['to_date']))
                                {
                                    $from_date = $_GET['from_date'];
                                    $to_date = $_GET['to_date'];

                                    $query = "SELECT * FROM costumer WHERE dateinstalled BETWEEN '$from_date' AND '$to_date' ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td th style="text-align: center"><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
                                                <td th style="text-align: center"><?= $row['address']; ?></td>
                                                <td th style="text-align: center"><?= $row['plan']; ?></td>
                                                 <td th style="text-align: center"><?= $row['status']; ?></td>
                                                <td th style="text-align: center"><?= $row['dateinstalled']; ?></td>
                                                <td th style="text-align: center"><?= $row['macaddress']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Record Found";
                                    }
                                }
                            ?>
   
                           
                            </tbody>
                        </table>
                    </div>
                </div>
 </div>
            </div>
        </div>
    </div>


    




    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
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