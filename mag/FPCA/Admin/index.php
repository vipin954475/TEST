
<?php
session_start();
if($_SESSION)
{

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

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div>
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
            <span>Wait, please...</span>
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
                        <a href="#" class="btn btn-primary" data-dismiss="modal">No</a>
                        <a href="logout.php" class="btn btn-primary">Yes</a>
                    
                    </div>
                </div>
            </div>
        </div>
    <div class="razo-social-share-area">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
        <a href="#" class="ss-close-btn"><i class="arrow_right"></i></a>
    </div>
    <!-- Social Share Area End -->

    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="razoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="./img/core-img/logo.png" alt=""></a>

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
                                     <li><a href="#">Approve</a>
                                        <ul class="dropdown">
                                            <li><a href="controllerapprove.php">- Controller</a></li>
                                            <li><a href="userapprove.php">- User</a></li>
                                        </ul>
                                    </li>
                                        <li><a href="#">Movie</a>
                                        <ul class="dropdown">
                                            <li><a href="addmovie.php">- Add Details</a></li>
                                            <li><a href="viewmovie.php">-List Movie</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Artist</a>
                                        <ul class="dropdown">
                                            <li><a href="addartist.php">- Add Artist</a></li>
                                            <li><a href="viewartist.php">- View Artists</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Notifications</a>
                                        <ul class="dropdown">
                                            <li><a href="addnotification.php">- Add Notifications</a></li>
                                            <li><a href="viewnotifications.php">- View Notifications</a></li>
                                        </ul>
                                    </li>
                                     <li><a href="#">Locations</a>
                                        <ul class="dropdown">
                                            <li><a href="addplace.php">- Add Locations</a></li>
                                              <li><a href="viewlocation.php">- View Locations</a></li>
                                        </ul>
                                    </li>
                                 
                                     <li><a href="#">Vehicles</a>
                                        <ul class="dropdown">
                                            <li><a href="addvehicle.php">- Add  Details</a></li>
                                            <li><a href="viewvehicle.php">- View Details</a></li>
                                             
                                        </ul>
                                    </li>
                                     <li><a href="#">Comments</a>
                                        <ul class="dropdown">
                                            <li><a href="addcomment.php">- View Comments</a></li>
                                             
                                        </ul>
                                    </li>
                                    <li><a href="logout.php" data-toggle="modal" data-target="#searchModal">logout</a></li>   
                                    </ul>
                                </div>
                            <!-- Nav End -->
                        </div></nav></div></div></div></header>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(../img/bg-img/1.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center justify-content-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text text-center">
                                    <h2 data-animation="fadeInUpBig" data-delay="100ms">Designed For Music, Engineered to Last</h2>
                                    <h5 data-animation="fadeInUpBig" data-delay="400ms"></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(../img/bg-img/30.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center justify-content-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-10 col-lg-6">
                                <div class="welcome-text text-center">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Designed For Music, Engineered to Last</h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms"></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(../img/bg-img/32.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center justify-content-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-10 col-lg-6">
                                <div class="welcome-text text-center">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Designed For Music, Engineered to Last</h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms"></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(../img/bg-img/33.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center justify-content-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-10 col-lg-6">
                                <div class="welcome-text text-center">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Designed For Music, Engineered to Last</h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms"></h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
  
 
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
<?php
}
else{
    header('location:../index.php');
}
?>