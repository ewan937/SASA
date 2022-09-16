<?php include 'includes/session.php'; ?>
<?php include ('includes/header.php'); ?>
<?php include ('includes/sidebar.php'); ?>
<?php include ('includes/topbar.php'); ?>

<?php 
  include 'timezone.php'; 
  $today = date('Y-m-d');
  $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }
?>

<br>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                      
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                       
                        <!-- active costumer -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h6>Active internet</h6></div>
                                            <h3 class="card-title"><div><?php include('subscribertotal/activesub.php');?></div></h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <a href="costumerlist.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h6>Active cable</h6></div>
                                            <h3 class="card-title"><div><?php include('subscribertotal/activesubcable.php');?></div></h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <a href="costumeractivecable.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>


                        <!-- end active costumer -->



                         <!-- disconnected costumer -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <h6><span style="color: red;">Disconnected internet</h6></div>
                                             <h3 class="card-title"><div><?php include('subscribertotal/dissubs.php');?></div></h3>
                                        </div>
                                        <div class="col-auto">
                                            <i  class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                     <a href="costumerdisconnected.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>


                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <h6><span style="color: red;">Disconnected cable</h6></div>
                                             <h3 class="card-title"><div><?php include('subscribertotal/discosubcable.php');?></div></h3>
                                        </div>
                                        <div class="col-auto">
                                            <i  class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                     <a href="costumercabledisco.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                <h6>Pending internet</h6></div>
                                             <h3 class="card-title"><div><?php include('subscribertotal/notfinish.php');?></div></h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <a href="costumernotfinish.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>

                                 <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                <h6>Pending cable</h6></div>
                                             <h3 class="card-title"><div><?php include('subscribertotal/notfinishsubcable.php');?></div></h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <a href="costumercablenotfinish.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- end disconnected costumer -->


                        <!-- complementary costumer -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h6>complementary internet</h6></div>
                                              <h3 class="card-title"><div><?php include('subscribertotal/complementary.php');?></div></h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                                </div>
                                            </div>
                                            <a href="costumercomple.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h6>complementary cable</h6></div>
                                              <h3 class="card-title"><div><?php include('subscribertotal/complesubcable.php');?></div></h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                                </div>
                                            </div>
                                            <a href="costumercablecomple.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>   
                    </div>
                    <!-- end complementary costumer -->  

                    <br>
                    <br>
                    <br>
                   

                    <!-- Content Row -->

                  

                    <div class="main-panel">
                                    <div class="content-wrapper">
                                        <div class="row">
                                        </div>
                        <div class="row">
                                <div class="col-md-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body dashboard-tabs p-0">
                                            <i><h3><a style="text-align: center" class="nav-link text-uppercase" id="overview-tab"  role="tab" aria-controls="overview" aria-selected="true">Overall of total subscriber by plan</a></h3></i>
                        <div class="tab-content py-0 px-0">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                <div class="d-flex flex-wrap justify-content-xl-between">
                                    <div class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-calendar-heart icon-lg me-3 text-primary"></i>
                                    <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-currency-usd me-3 icon-lg text-danger"></i>
                                    <div class="d-flex flex-column justify-content-around">
                                        <h3><small class="mb-1 text-muted">20MBPS</small></h3>
                                        <h3 style="text-align: center" class="card-title"><div><?php include('subscribertotal/20mbps.php');?></div></h3>
                                    </div>
                                    </div>
                                    </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                    <i class="mdi mdi-currency-usd me-3 icon-lg text-danger"></i>
                            <div class="d-flex flex-column justify-content-around">
                                    <h3><small class="mb-1 text-muted">30MBPS</small></h3>
                                    <h3 style="text-align: center" class="card-title"><div><?php include('subscribertotal/30mbps.php');?></div></h3>
                            </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                    <i class="mdi mdi-eye me-3 icon-lg text-success"></i>
                            <div class="d-flex flex-column justify-content-around">
                                    <h3><small class="mb-1 text-muted">40MBPS</small></h3>
                                    <h3 style="text-align: center" class="card-title"><div><?php include('subscribertotal/40mbps.php');?></div></h3>
                            </div>
                        </div>
                        <div class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                    <i class="mdi mdi-download me-3 icon-lg text-warning"></i>
                            <div class="d-flex flex-column justify-content-around">
                                    <h3><small class="mb-1 text-muted">50MBPS</small></h3>
                                    <h3 style="text-align: center" class="card-title"><div><?php include('subscribertotal/50mbps.php');?></div></h3>
                            </div>
                                </div>
                                   </div>
                                        </div>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <br>
      







<a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

                <!-- /.container-fluid -->
            <!-- End of Main Content -->
        <!-- End of Content Wrapper -->
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    

   <?php include ('includes/footer.php'); ?>
<?php include ('includes/scripts.php'); ?>
   
 <script src="js/demo/chart-bar-demo.js"></script>





</body>
</html>