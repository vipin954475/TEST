<?php
session_start();
$name=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>FPCA</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
</style>
</head>

<body>
    <!-- Preloader -->
      <div id="preloader">
        <div>
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
            
        </div>
    </div>
    <!-- /Preloader -->

    <!-- Top Search Area Start -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                         <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
                        <!-- Search Button -->
                               <a href="logout.php" class="btn btn-primary">Yes</a>
                        <a href="#" class="btn btn-primary" data-dismiss="modal">No</a>
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Search Area End -->


    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="razoNav">

                        <!-- Logo -->
                        
                        <a class="nav-brand" href="index.php"><img src="../img/core-img/logo.png" alt=""></a>
                       <!-- Logo -->
                     


                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="index.php">Home</a></li>
                                     
                                        <li><a href="#">List</a>
                                        <ul class="dropdown">
                           
                                            <li><a href="viewmovie.php">-Movie List</a></li>
                                            <li><a href="viewartist.php">-Artist List</a></li>
                                             <li><a href="viewlocation.php">-Location List</a></li>
                                              <li><a href="viewvehicle.php">-Vehicle List</a></li>
                                        </ul>
                                    </li>
                                    
                                    </li>

                                     <?php 
require'../connect.php';
$sql = "SELECT * FROM notification where cname= '$name'";
$rs = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($rs))
{
 $count = $row['count'];
 }
                                    ?>
                                      <li><a href="#" class="notification">Notifications<span class="badge"><?php  echo $count;?></span></a>
                                        <ul class="dropdown">
                                            <li><a href="viewnotification.php">-View Notifications</a></li>
                                        </ul>
                                    </li>
                                     <li><a href="#">Payment</a>
                                        <ul class="dropdown">
                                         
                                            <li><a href="addpayment.php">-Add Payment</a></li>
                                               <li><a href="viewpayment.php">-Payment List</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="logout.php" data-toggle="modal" data-target="#searchModal">logout</a></li>
                                           
                                        </ul>
                                    </li>
                                    
                                
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
 
    <!-- Welcome Area End -->

    <!-- All JS Files -->

    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="../js/razo.bundle.js"></script>
    <!-- Active -->
    <script src="../js/default-assets/active.js"></script>

</body>

</html>