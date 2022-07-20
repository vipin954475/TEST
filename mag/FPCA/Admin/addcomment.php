
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

  <?php
session_start();
  include'header.php';
  include '../connect.php';
  

$sql = "SELECT * FROM comment ";
$rs = mysqli_query($con,$sql);
$count = mysqli_num_rows($rs);

while($row = mysqli_fetch_assoc($rs))
{

echo'

    <!-- Welcome Area Start -->
     <section class="welcome-area">
        <div class="">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(../img/bg-img/32.jpg);">
                    <div class="single-podcast-area mb-30 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Thumbnail -->
                        <div class="podcast-thumb">
                        <h3><font color="red">'.$row['moviename'].'</font></h3>
                            <div class="like">
                                
                                <a href="deletecomment.php?id='.$row["cid"].'"><font color="red">Delete</font></a>
                            </div>
                        </div>
                        <!-- Content -->
                        <div class="podcast-content">
                            <div class="podcast-meta">
                               
                               <a href="#"><i>'.$row['username'].' </i></a>
                                <a href="#"><i class="icon_calendar"></i>'.$row['date'].' </a>
                            </div>
                            <h5><font color="blue">'.$row['comment'].'</font></h5>
                           
                        </div>
                    </div>';
}
                    ?>
                <!-- Welcome Content -->
           
            </div>

        
<?php include'footer1.php'; ?>

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
