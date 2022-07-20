 <?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Films</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">

    

    <link rel="stylesheet" type="text/css" href="../dndod/dndod-popup.min.css">
    <script src="../dndod/dndod-popup.min.js"></script>
</head>

<body  style="background-image: url(../img/bg-img/54.jpg);">
<?php include'header.php'; ?>


<section class="razo-blog-area section-padding-80-0"  style="position: all; left: 33.3333%;top: 0px">
        <div class="container">
            <div class="row">
                <!-- Weekly News Area -->
                <div class="col-12 col-md-8">
                    <div class="weekly-news-area mb-50">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h2> New Release</h2>
                        </div>
<?php
require'../connect.php';
$sql = "SELECT * FROM movie";
$rs = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($rs))
{
$name = $row['mname'];
}


$sql = "SELECT * FROM movie";
$rs = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($rs))
{
   ECHO' 

                        <!-- Featured Post Area -->
                        <div width="100%" class="featured-post-area bg-img bg-overlay mb-30" style="background-image: url(../Movie/'.$row['Comments'].');">
                            <!-- Post Overlay -->
                            <div class="post-overlay">
                                <div class="post-meta">
                                    <a href="addcomment.php?id='.$row["mid"].'"><i class="fa fa-comments-o" aria-hidden="true"> '.$row['count'].'Comments</i> </a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>'.$row['count'].'Views</a>
                                    <h1 class="post-title"><b>'.$row["mname"].'</b></h1>
                                </div>
                                <a href="" class="post-title">'.$row["description"].'</a>
                            ';
                         echo "<br><br><a  href='viewmore.php?id=".$row['mid']."' class='btn razo-btn' >View More</a></div>
                        </div>";
                    }
                        ?>
</center>
  


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