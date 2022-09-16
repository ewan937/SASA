
<?php include ('includes/header.php'); ?>

<?php
  session_start();
  if(isset($_SESSION['admin'])){
    header('location:main.php');
  }
?>

<!DOCTYPE html>
<html lang="en">



<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                      
                            
                         
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>

                                    <form action="loginaction.php" method="POST">
                                    <form class="user">
                                      <div class="form-group has-feedback">
                                        <input type="text" class="form-control" name="username" placeholder="input Username" required autofocus>
                                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                    </div>
                                    
                                        <div class="form-group has-feedback">
                                        <input type="password" class="form-control" name="password" placeholder="input Password" required>
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        </div>
                                        <div class="form-group">
                                           
                                        </div>
                               
                                            <div class="col-xs-4">
                                            <button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
                                             </div>
                                            </div>
                                    </form>




                                        <hr>
                           

    <?php
        if(isset($_SESSION['error'])){
            echo "
                <div class='callout callout-danger text-center mt20'>
                    <p>".$_SESSION['error']."</p> 
                </div>
            ";
            unset($_SESSION['error']);
        }
    ?>
</div>
    
<?php include 'includes/scripts.php' ?>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


    
</body>

</html>