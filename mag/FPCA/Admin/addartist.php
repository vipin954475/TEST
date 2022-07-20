
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
    <?php include'header.php';?>
    <!-- Preloader -->
   

    <!-- Welcome Area Start -->
     <section class="welcome-area">
        <div class="">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(../img/bg-img/33.jpg);">
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
                                <label>
                                    <select name="artisttype" style="width: 300px;height: 40px ">
                                        <option value="None">Select Role</option>
   
                                <?php 
                                include '../connect.php';
                                $sql1=mysqli_query($con,"select * from post");

                                if(mysqli_num_rows($sql1)>0){
                                     while($rows=mysqli_fetch_assoc($sql1)){
                                             
                                             ?><option value="<?php echo $rows["position"]; ?>"><?php echo $rows["position"]; ?></option> 
                                     <?php }
                                    }
                                    ?>
                                </select>
                                </label><br>
                                <input type="text" name="artistname" required placeholder="Enter artist name" class="form-control">
                    
                                <br>
                              
                                <input type="text" name="desc" required placeholder="Enter artist description" class="form-control">
                                </label>
                                <br>
                                 <label>
                                <input type="file" placeholder="Image" name= "img"  required class="form-control" style="width: 300px;height: 40px;">
                                </label><br>
                                <label>
                                <input type="submit" value="Add Artist" name="addartist"  class="btn razo-btn w-100">
                                </label>
                               
                                </form>
                                    <h5 data-animation="fadeInUpBig"></h5>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php include'footer1.php'?>

    <!-- Blog Area Start -->
    
    <!-- Weekly Sehedule Area Start -->
    
    <!-- Footer Area Start -->

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
if(isset($_POST['addartist']))
{ 
$artistname=$_POST['artistname'];
$moviename = $_POST['moviename'];
$artisttype=$_POST['artisttype'];
$desc=$_POST['desc'];
$profile=$_FILES['img']['name'];
 $sql=mysqli_query($con,"select * from artist where moviename='$moviename' and artisi tname='$artistname' and artisttype='$artisttype'");

$r=mysqli_num_rows($sql);

if($r==true)
{
echo "<script>alert('This Artist Details already exists');window.location.href='addartist.php';</script>";
}
else
{
    
$sqlIns = "INSERT INTO artist (artisitname, moviename, artisttype, profile,adesc) VALUES ( '$artistname', '$moviename', '$artisttype', '$profile','$desc')";
if(mysqli_query($con,$sqlIns))
{            //upload image
            mkdir("../profile/");
            move_uploaded_file($_FILES['img']['tmp_name'],"../profile/".$_FILES['img']['name']);
}
echo "<script> alert ('Artist Details Added Successfully');window.location.href='viewartist.php';</script>";
}
}
?>