<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Requests</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">

</head>

<body style="background-image: url(../img/bg-img/34.jpg);">
  <?php include'header.php' ?> 


<div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
               
                        <!-- Form -->
                         <p><font color="gray">Are You Sure...?</font></p>
                        <!-- Search Button -->
                        <center>
                        <a id="del" href="approve.php" class="btn btn-primary">Yes</a>
                        <a href="#" class="btn btn-primary" data-dismiss="modal">No</a>
                        </center>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-search-area">
        <div class="modal fade" id="searchModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->
                         <p><font color="gray">Are You Sure...?</font></p>
                        <!-- Search Button -->
                        <center><a id="del" href="reject.php" class="btn btn-primary">Yes</a>
                        <a href="#" class="btn btn-primary" data-dismiss="modal">No</a>
                        </center>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
  <section class="razo-music-charts-area section-padding-80 bg-overlay bg-img jarallax" >
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center white">
                        <h2>Requests</h2>
                    </div>
                </div>
            </div>   
             <div class="row">
                <div class="col-12">


<?php
require'../connect.php';
$sql = "SELECT * FROM login WHERE  status='0' and type='controller'";
$rs = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($rs))
{
        echo'
             <div class="single-music-chart d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                        <!-- Music Content -->
                        <div class="music-content d-flex align-items-center">
                            <div class="sl-number">
                                <h5>'.$row["login_id"].'</h5>
                            </div>
                            <div class="music-title">
                                <h5>'.$row['username'].'</span></h5>
                            </div>
                        </div>
                        <!-- Music Price -->
                        <div class="music-price">
                            <a onclick="approve_fn('.$row["login_id"].')" href="#" class="btn razo-btn btn-2" >Approve</a>
                       
                            <a onclick="reject_fn('.$row["login_id"].')" href="#" class="btn razo-btn btn-2">Reject</a>
                        </div>
                    </div>';
}
?>
             <div class="row">
                <div class="col-12">
                    <div class="view-more-button text-center">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
    <!-- Footer Area Start -->

        <!-- Main Footer Area -->
      <?php include'footer1.php';?>
      <script type="text/javascript">
          function approve_fn(id)
          {
               $("#searchModal").modal('show');
               $("#del").attr("href","approve.php?id="+id);
          }
           function reject_fn(id)
          {
               $("#searchModal1").modal('show');
               $("#del").attr("href","reject.php?id="+id);
          }
          
      </script>
</body>

</html>