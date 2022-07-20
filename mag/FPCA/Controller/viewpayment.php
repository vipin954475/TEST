
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Payment</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">

</head>

<body>
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
<?php include'header.php';?>
<center>

<?php
require'../connect.php';
 $sql=mysqli_query($con,"select * from movie where controller = '$name'");
                                     while($rows=mysqli_fetch_assoc($sql))
                                     {
                                            $name1 = $rows['mname'];
                                     }
  $sql1=mysqli_query($con,"select * from payment where moviename = '$name1'");

$count = mysqli_num_rows($sql1);
if($count>0)
{
while($row = mysqli_fetch_assoc($sql1))
{

   ECHO'
        <!-- Single Razo Event Area -->
                <div class="col-12">
                    <div class="single-razo-event-area d-flex flex-wrap align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="event-thumbnail">
                            
                        </div>
                        <!-- Event Content -->
                        <div class="event-content d-flex align-items-center">
                            <div class="event-text">
                                <h5>'.$row['username'].'</h5>
                                <div class="event-meta">
                                    <a href="#" class="event-date"><i class="icon_calendar"></i> '.$row['day'].'</a>
                                    <a href="#" class="event-time"><i class="icon_clock_alt"></i> </a>
                                    
                                </div>
                                <p>'.$row['amount'].'k</p>
                                
                            </div>
                       
                            <div class="event-purchase-button">
                                <a href="deletepayment.php?id='.$row["pid"].'" class="btn razo-btn"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                </div>


                       ';}
                   }
                   else
                   {
                    echo'<div class="welcome-text text-center">
                  
                      <p><font color="gray"><h2>No Payment are added</h2></font></p>
                        
                    </div>';
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