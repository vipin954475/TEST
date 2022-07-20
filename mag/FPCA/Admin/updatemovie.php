
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
                        
                        <!-- Search Button -->
                        <div class="search-btn"><i class="icon_search"></i></div>
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
                                     <li><a href="#">Approve</a>
                                        <ul class="dropdown">
                                            <li><a href="controllerapprove.php">- Controller</a></li>
                                            <li><a href="userapprove.php">- User</a></li>
                                        </ul>
                                    </li>
                                        <li><a href="#">Movie</a>
                                        <ul class="dropdown">
                                            <li><a href="addmovie.php">- Add Details</a></li>
                                            <li><a href="updatenovie.php">- Update Movie</a></li>
                                              <li><a href="">- Delete Movie</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Artist</a>
                                        <ul class="dropdown">
                                            <li><a href="">- Add Artist</a></li>
                                            <li><a href="">- View Artists</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Notifications</a>
                                        <ul class="dropdown">
                                            <li><a href="">- Add Notifications</a></li>
                                            <li><a href="">- Update Notifications</a></li>
                                              <li><a href="">- Delete Notifications</a></li>
                                        </ul>
                                    </li>
                                     <li><a href="#">Places</a>
                                        <ul class="dropdown">
                                            <li><a href="">- Add Places</a></li>
                                            <li><a href="">- Update Places</a></li>
                                              <li><a href="">- Delete Places</a></li>
                                        </ul>
                                    </li>
                                 
                                     <li><a href="#">Vehicles</a>
                                        <ul class="dropdown">
                                            <li><a href="">- Add Vehicles Details</a></li>
                                            <li><a href="">- Update Vehicles Details</a></li>
                                              <li><a href="">- Delete Vehicles Details</a></li>
                                        </ul>
                                    </li>
                                     <li><a href="#">Comments</a>
                                        <ul class="dropdown">
                                            <li><a href="">- View Comments</a></li>
                                              <li><a href="">- Delete Comments</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="logout.php">logout</a></li>
                                           
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
        <div class="">

          <div class="single-welcome-slide bg-img bg-overlay" >
          
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center justify-content-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text text-center">
                                    <select>
                                <option>Select Movie name</option>
                                    <?php
            include '../connect.php';
            $sql = "SELECT * FROM movie";
            $rs = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($rs))
            {
          
                          echo"<option value='".$row['mname']."'>".$row['mname']."</option>";
          }
          echo "</select>";
            $sql = "SELECT * FROM movie";
            $rs = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($rs))
            {
          
                              echo' <form  method="post" action="" enctype="multipart/form-data">
                                <label>
                                <input type="text" name="mname"  value="'.$row['mname'].'" class="form-control"></label><br>
                                <label>
                                <input type="text" required name="director" value="'.$row['director'].'" class="form-control">
                                </label><br>
                                <label>
                                <input type="text" required name="writer" value="'.$row['Writer'].'" class="form-control">
                                </label><br>
                                <label>
                                <input type="text" required name="hero" value="'.$row['Hero'].'" class="form-control">
                                </label><br>
                                <label>
                                <input type="text" required name="heroine" value="'.$row['Heroine'].'" class="form-control">
                                </label><br>
                                <label>
                                <input type="text" required name="rating" value="'.$row['Rating'].'" class="form-control">
                                </label><br>
                                <label>
                                <input type="submit" value="Update Movie Details" name="updatemovie"  class="btn razo-btn w-100">
                                </label>
                                </form>
                                    <h5 data-animation="fadeInUpBig"></h5>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        }
        ?>
        

    <!-- Blog Area Start -->
    
    <!-- Weekly Sehedule Area Start -->
    
    <!-- Footer Area Start -->
    
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
include '../connect.php';
if(isset($_POST['addmovie']))
{ 
$mname=$_POST['mname'];
$director=$_POST['director'];
$writer = $_POST['writer'];
$hero = $_POST['hero'];
$heroine = $_POST['heroine'];
$rating = $_POST['rating'];
//$sqlIns = "INSERT INTO movie(mname,director,Writer,Hero,Heroine,Rating,Comments) VALUES ('$mname','$director','$writer','$hero','$heroine','$rating','Good')";
//$resultReg = mysqli_query($con,$sqlIns);
echo "<script> alert ('Movie Details Added Successfully');window.location.href='index.php';</script>";
}
?>