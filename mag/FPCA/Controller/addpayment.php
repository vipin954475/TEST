
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
  <?php include'header.php'; ?>

    <!-- Welcome Area Start -->
     <section class="welcome-area">
        <div class="">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(../img/bg-img/32.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center justify-content-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text text-center">
                                <form  method="post" action="" enctype="multipart/form-data">
                                <label>
                                <select name="name" class="form-control">
                                    <option>Select Artist</option>
                                     <?php 
                                include '../connect.php';

                                $sql=mysqli_query($con,"select * from movie where controller = '$name'");
                                     while($rows=mysqli_fetch_assoc($sql))
                                     {
                                            $name1 = $rows['mname'];
                                     }
                                $sql=mysqli_query($con,"select * from artist where moviename = '$name1'");

                                if(mysqli_num_rows($sql)>0){
                                     while($rows=mysqli_fetch_assoc($sql)){
                                             ?><option value="<?php echo $rows["artisitname"]; ?>"><?php echo $rows["artisitname"]; ?></option> 
                                     <?php }
                                    }
                                    ?>
                                </select>

             </label><br>
             <label>
             <input type="text" required name="duty" placeholder="Working Hours" class="form-control" required>
             </label>
             </br>
             
                                <label>
                                <label>
                                <input type="submit" value="Add Payment" name="addpayment"  class="btn razo-btn w-100">
                                </label>
                                </form>
                                    <h5 data-animation="fadeInUpBig"></h5>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
<?php
include '../connect.php';
if(isset($_POST['addpayment']))
{ 
$name=$_POST['name'];
$duty = $_POST['duty'];
$sql=mysqli_query($con,"select * from artist where artisitname='$name'");

while($row = mysqli_fetch_assoc($sql))
{

    $type = $row['artisttype'];
    $mname = $row['moviename'];
}

$sql1=mysqli_query($con,"select * from post where position='$type'");

while($row = mysqli_fetch_assoc($sql1))
{

    $pay = $row['cash'];
}

$Balance = $duty*$pay;
$sqlIns = "INSERT INTO payment (username, duty, amount,moviename) VALUES ('$name','$duty','$Balance','$mname')";
mysqli_query($con,$sqlIns);
echo "<script> alert ('Payment Added Successfully');window.location.href='viewpayment.php';</script>";


}
?>