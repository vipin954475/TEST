<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>User Approval</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">

</head>

<body style="background-image: url(../img/bg-img/34.jpg);">
    <!-- Preloader -->
 <?php include'header.php';?>

    <!-- Music Charts Area Start -->
    <section class="razo-music-charts-area section-padding-80 bg-overlay bg-img jarallax" style="background-image: url(img/bg-img/34.jpg);">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center white">
                        <h2>REQUESTS OF  THE WEEK</h2>
                    </div>
                </div>
            </div>

<?php
require'../connect.php';
$sql = "SELECT * FROM login WHERE  status='0' and type='User'";
$rs = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($rs))
{
        echo'<div class="row">
                <div class="col-12">
                    <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                        <!-- Music Content -->
                        <div class="music-content d-flex align-items-center">
                            <div class="sl-number">
                                <h5>'.$row["login_id"].'</h5>
                            </div>
                            
                            <
                            <div class="music-title">
                                <h5>'.$row['username'].'</span></h5>
                            </div>
                        </div>
                        <!-- Music Price -->
                        <div class="music-price">
                            <a href="approve.php?id='.$row["login_id"].'" class="btn razo-btn btn-2">Approve</a>
                       
                            <a href="reject.php?id='.$row["login_id"].'" class="btn razo-btn btn-2">Reject</a>
                        </div>
                    </div>';
}
?>

   </div>
</section>

        <!-- Main Footer Area End -->
        
        <!-- Copywrite Text -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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