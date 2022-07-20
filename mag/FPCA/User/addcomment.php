 <?php session_start(); ?>
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
  <?php include'header.php'; 

$name = $_SESSION['name'];
  ?>

    <!-- Welcome Area Start -->
     <section class="welcome-area" >
    

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(../img/bg-img/32.jpg);">
                <!-- Welcome Content -->

                 <!-- Single Podcast Area -->
 <?php
 include '../connect.php';
 $cid = $_GET['id'];
 $sql="SELECT * from movie where mid='$cid'";
$res = mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res)) 
{
    $mname = $row['mname'];

}
 $sql="SELECT * from comment where moviename='$mname'";
$res = mysqli_query($con,$sql);
while ($row=mysqli_fetch_assoc($res)) 
{
echo '
                        <!-- Content -->
                        <div class="podcast-content">
                            <div class="podcast-meta">
                                <a href="#"><i class="icon_calendar"></i>'.$row['date'].' </a>
                                <a href="#"><i class=""></i>'.$row['username'].' </a>
                            </div>
                            <h5><font color="Blue">'.$row['comment'].'</font></h5>
                           
                        </div>
                        <div class="like-comment">
                                <a href="deletecomment.php?id='.$row["cid"].'" class=""><font color="red">Delete </font></a>
                                
                          
            ';
        }
            ?> 
           </div>
       </div>
   </div>
</div>
                           
</div>
</section>
       
                    <div class="container h-100">
                        <div class="row h-100 align-items-center justify-content-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text text-center">
                                <form  method="post" action="" enctype="multipart/form-data">
                                <label>
                                <input type="text" name="comment" required placeholder="Enter your comment" class="form-control">
                                </label><br>
                                <label>
                               <input type="submit" name="addcomment" value="Comment"  class="btn razo-btn w-100">
                                </label>
                                </form>
                                    <h5 data-animation="fadeInUpBig"></h5>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
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
         </div>
                </div>
<?php include'footer1.php'; ?>
</body>

</html>
<?php
include '../connect.php';
if(isset($_POST['addcomment']))
{ 

$comment=$_POST['comment'];
$sql = "SELECT * FROM movie where mid='$cid'";
$rs = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($rs))
{
 $mname = $row['mname'];
 }
$sqlIns = "INSERT INTO comment (username, comment, moviename) VALUES ('$name', '$comment','$mname' )";
mysqli_query($con,$sqlIns);


$sql = "SELECT * FROM movie where mname= '$mname'";
$rs = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($rs))
{
 $count = $row['count'];
 }
$count = $count+1;
$sqlCount = "UPDATE movie SET count ='$count' where mname='$mname'";
mysqli_query($con,$sqlCount);
echo "<script>window.location.href='viewmovie.php';</script>";


}
?>