
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Location</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <!-- Preloader -->
   
<?php
include'header.php';

require'../connect.php';
$sql = "SELECT * FROM movie where controller='$name' ";
$rs = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($rs))
{
    $mname = $row['mname'];
}

$sql = "SELECT * FROM places where moviename='$mname'";
$rs = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($rs))
{

   ECHO'
        <!-- Single Razo Event Area -->
                <div class="col-12">
                    <div class="single-razo-event-area d-flex flex-wrap align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="event-thumbnail">
                            <img src="../Location/'.$row['image'].'" alt="missing">
                        </div>
                        <!-- Event Content -->
                        <div class="event-content d-flex align-items-center">
                            <div class="event-text">
                                <h5>'.$row['moviename'].'</h5>
                                <div class="event-meta">
                                    <a href="#" class="event-date"><i class="icon_calendar"></i> '.$row['description'].'</a>
                                    <a href="#" class="event-time"><i class="icon_clock_alt"></i> 09.00 - 17.00</a>
                                    <a href="#" class="event-address"><i class="icon_pin_alt"></i> '.$row['pname'].'</a>
                                </div>
                                <p>'.$row['pname'].'</p>
                                
                            </div>
                       
                            <div class="event-purchase-button">
                               
                            </div>
                        </div>
                    </div>
                </div>


                       ';}
                        ?>
</center>
  


   
   <?php include'footer1.php';?>
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