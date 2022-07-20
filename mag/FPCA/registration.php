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
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

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
                        <p><font color="gray">New User Added</font></p>
                        <!-- Search Button -->
                      
                        <a href="login.php" class="btn razo-btn btn-2">Yes</a>
                        <!-- Search Button -->
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Search Area End -->

    <!-- Social Share Area Start -->
    <div class="razo-social-share-area">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
        <a href="#" class="ss-close-btn"><i class="arrow_right"></i></a>
    </div>
    <!-- Social Share Area End -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="razoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"></a>

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
                                    <li><a href="login.php">Sign In</a></li>
                                           
                                        </ul>
                                    </li>
                                    
                                <!-- Search Icon -->
                                <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                                    <i class="icon_search"></i>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
     <section class="welcome-area">
        <div class="welcome-slides owl-carousel">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/1.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center justify-content-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text text-center">
                                    <h2 data-animation="fadeInUpBig" data-delay="100ms">Register</h2>
                                    <div class="form-group">
                                    <form  method="post" action="">
                                    <label>
                                        <input type="text" name="username" required placeholder="Enter username" class="form-control">
                                    </label><br>
                                    <label>
                                    <input type="password" required name="password" placeholder="Enter password" class="form-control">
                                </label><br>
                                <label>
                                <select name="type" class="form-control" style="width: 220px;">
                                    <option value="Default">Select Usertype</option>
                                    <option value="User">User</option>
                                    <option value="controller">Controller</option>
                              
                            </select>
                        </labei>
                              </br>
                                <label>
                                        <input type="number" name="phone" required placeholder="Enter your phone number" class="form-control">
                                    </label><br>
                                <label>
                                    <input type="submit" value="Sign Up" name="Signup" class="btn razo-btn w-100" >

                                </label>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
    </section>
        
        <!-- Copywrite Text -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- All JS Files -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/razo.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>
</a></div></div>
</div>
</div>
</div>
</footer>
</BR>
</form>
</div>
</div></div></div></div></div></div></div>
</section></body></html>
<?php
session_start();
include 'connect.php';
if(isset($_POST['Signup']))
{ 
$username=$_POST['username'];
$password=$_POST['password'];
$phone = $_POST['phone'];
$type = $_POST['type'];

$sql = "SELECT * FROM login WHERE username = '$username' and password = '$password'";
   
    $result = mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);
    if ($count > 0)
    {   
        echo "<script> alert ('Username OR Password Exists');window.location.href='registration.php';</script>";
  }
  else 
   {
    $sqlReg = "INSERT INTO login (username, password, type, phone, status) VALUES ( '$username', '$password', '$type', '$phone', '0')";
    $resultReg = mysqli_query($con,$sqlReg);
      echo "<script> alert ('SuccessFully Added');window.location.href='login.php';</script>";
      
    }
  }

?>
