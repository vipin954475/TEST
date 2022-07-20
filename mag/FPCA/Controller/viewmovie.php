
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

<div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                         <p><font color="gray">Are You Sure,you Want to Delete ?</font></p>
                        <!-- Search Button -->

                        <a href="#" class="btn btn-primary" data-dismiss="modal">No</a>
                        <a id="del" href="deletemovie.php" class="btn btn-primary">Yes</a>
                        <div class="search-btn"><i class="icon_search"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section class="razo-blog-area section-padding-80-0"  style="position: all; left: 33.3333%;top: 0px">
        <div class="container">
            <div class="row">
                <!-- Weekly News Area -->
                <div class="col-12 col-md-8">
                    <div class="weekly-news-area mb-50">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h2> Movie List</h2>
                        </div>
<?php


require'../connect.php';


$sql = "SELECT * FROM movie where controller='$name' ";
$rs = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($rs))
{

   ECHO' 

                        <!-- Featured Post Area -->
                        <div width="100%" class="featured-post-area bg-img bg-overlay mb-30" style="background-image: url(../Movie/'.$row['Comments'].');">
                            <!-- Post Overlay -->
                            <div class="post-overlay">
                                <div class="post-meta">
                                    <a href=""><i class="fa fa-comments-o" aria-hidden="true"></i> '.$row['count'].'</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> '.$row['count'].'</a>
                                    <h1 class="post-title"><b>'.$row["mname"].'</b></h1>
                                </div>
                                <a href="" class="post-title">'.$row["description"].'</a>
                            ';
                         echo "<br><br></div>
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
<script type="text/javascript">
    function delete_fun(id){
        // alert(id);
        $("#searchModal").modal('show');
        $("#del").attr("href","deletemovie.php?id="+id);
    }
</script>
</body>

</html>