
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

<body style="background-image: url(../img/bg-img/34.jpg);">
  
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

   <?php include'header.php';?>
    <!-- Welcome Area Start -->
     <section class="welcome-area">
        <div class="">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" >
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center justify-content-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text text-center">
                                   
                                <form  method="post" action="" enctype="multipart/form-data">
                                <label>
                                <br>
                                <label>
                                    <select name="moviename" style="width: 300px;height: 40px ">
                                        <option value="None">Select Movie</option>
   
                                <?php 
                                include '../connect.php';
                                $sql=mysqli_query($con,"select * from movie");

                                if(mysqli_num_rows($sql)>0){
                                     while($rows=mysqli_fetch_assoc($sql)){
                                             ?><option value="<?php echo $rows["mname"]; ?>"><?php echo $rows["mname"]; ?></option> 
                                     <?php }
                                    }
                                    ?>
                                </select>
                            </label>
                        </br>
                                
                            <input type="text" name="message" required placeholder="Message" class="form-control">
                           <br>
                          
                              
                             
                                <label>
                                <input type="submit" value="Add Notification" name="addnotification"  class="btn razo-btn w-100">
                                </label>
                               
                                </form>
                                    <h5 data-animation="fadeInUpBig"></h5>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        

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
if(isset($_POST['addnotification']))
{ 

$moviename = $_POST['moviename'];
$message = $_POST['message'];
  $sql="SELECT * from movie where mname='$moviename'";
$res = mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res)) 
{
$cname = $row['controller'];
}
    
  
$sqlIns = "INSERT INTO notification (moviename, cname, message,count) VALUES ( '$moviename', '$cname', '$message','1')";
mysqli_query($con,$sqlIns);
echo "<script> alert ('Notification Added Successfully');window.location.href='index.php';</script>";

}
?>