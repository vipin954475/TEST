 <?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Artist</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">

</head>

<body>
<?php include'header.php';?>
<center>


 <section class="razo-blog-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Weekly News Area -->
                <div class="col-12 col-md-8">
                    <div class="weekly-news-area mb-50">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h2> Artist</h2>
                        </div>
<?php
require'../connect.php';
$sql = "SELECT * FROM artist";
$rs = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($rs))
{

   ECHO'
                        <!-- Featured Post Area -->
                        <div class="featured-post-area bg-img bg-overlay mb-30" style="background-image: url(../profile/'.$row['profile'].');">
                            <!-- Post Overlay -->
                            <div class="post-overlay">
                                <div class="post-meta">
                 <h1 class="post-title"><font color="red"><b>'.$row["moviename"].'</b></font></h1>
                                    <h1 class="post-title"><b>'.$row["artisitname"].'</b></h1>
                                </div>
                                <a href="" class="post-title">'.$row["artisttype"].'</a>
                                <br><br>
                                 ';
                                  echo "<br></div>
                        </div>";
                           }
                        ?>
</center>
  
    <!-- Footer Area Start -->
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