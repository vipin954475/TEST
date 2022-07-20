 <?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Movie</title>

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

<?php
require'../connect.php';
    $id=$_GET['id'];
$sql = "SELECT * FROM movie where mid='$id'";
$rs = mysqli_query($con,$sql);
$count = mysqli_num_rows($rs);

while($row = mysqli_fetch_assoc($rs))
{

$mname = $row['mname'];

   ECHO'
        <!-- Single Razo Event Area -->
                <div class="col-12">
                    <div class="single-razo-event-area d-flex flex-wrap align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Thumbnail -->
                        <div class="event-thumbnail">
                            <img src="../Movie/'.$row['Comments'].'" alt="missing">
                        </div>
                        <!-- Event Content -->
                        <div class="event-content d-flex align-items-center">
                            <div class="event-text">
                                <h3>'.$row['mname'].'</h3>
                                <div class="event-meta">
                                    <a href="#" class="event-date"><i class="icon_calendar"></i>15-08-2017</a>
                                    <a href="#" class="event-time"><i class="icon_clock_alt"></i> 09.00 - 17.00</a>
                                         
                                <table>
                                <tr>
                                <td>Director :</td><td>'.$row['director'].'</td>
                                </tr>
                                <tr>
                                <td>Writer :</td><td>'.$row['Writer'].'</td>
                                </tr>
                                <tr>
                                <td>Actor :</td><td>'.$row['Hero'].'</td>
                                </tr>
                                <tr>
                                <td>Actoress :</td><td>'.$row['Heroine'].'</td>
                                </tr>
                                     <tr>
                                <td colspan=2>'.$row['description'].'</td>
                                </tr>

                                
                                </table>';
                            }
                        
                            echo'</div>
                       
                            <div class="event-purchase-button">
                             
                            </div>
                        </div>
                    </div>
                </div>


                       ';

$sql = "SELECT * FROM artist where moviename='$mname' AND artisttype='director'";
$rs = mysqli_query($con,$sql);
$count = mysqli_num_rows($rs);

while($row = mysqli_fetch_assoc($rs))
{

echo'
                             <div class="tab-content" id="showRoutineTabContent">
                        <!-- Single Tab Content -->
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                            <div class="row">
                                <!-- Single Show Item -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-show-item mb-30">
                                        <img src="../profile/'.$row["profile"].'" alt="">
                                        <div class="overlay-content">
                                            <div class="text-center">
                                                <span>'.$row["artisttype"].'</span>
                                                <h5>'.$row["artisitname"].'
                                                <br>'.$row["adesc"].'</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
';
}
$sql = "SELECT * FROM artist where moviename='$mname' AND artisttype='Hero'";
$rs = mysqli_query($con,$sql);
$count = mysqli_num_rows($rs);

while($row = mysqli_fetch_assoc($rs))
{

echo'                            

                                <!-- Single Show Item -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-show-item mb-30">
                                        <img src="../profile/'.$row["profile"].'" alt="">
                                        <div class="overlay-content">
                                            <div class="text-center">
                                               <span>'.$row["artisttype"].'</span>
                                                <h5>'.$row["artisitname"].'
                                                <br>'.$row["adesc"].'</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
$sql = "SELECT * FROM artist where moviename='$mname' AND artisttype='actoress'";
$rs = mysqli_query($con,$sql);
$count = mysqli_num_rows($rs);

while($row = mysqli_fetch_assoc($rs))
{

echo'                            

                                <!-- Single Show Item -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-show-item mb-30">
                                        <img src="../profile/'.$row["profile"].'" alt="">
                                        <div class="overlay-content">
                                            <div class="text-center">
                                               <span>'.$row["artisttype"].'</span>
                                                <h5>'.$row["artisitname"].'
                                                <br>'.$row["adesc"].'</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }

$sql = "SELECT * FROM artist where moviename='$mname' AND artisttype='script writer'";
$rs = mysqli_query($con,$sql);
$count = mysqli_num_rows($rs);

while($row = mysqli_fetch_assoc($rs))
{

echo'

                                <!-- Single Show Item -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-show-item mb-30">
                                        <img src="../profile/'.$row["profile"].'" alt="">
                                        <div class="overlay-content">
                                            <div class="text-center">
                                               <span>'.$row["artisttype"].'</span>
                                                <h5>'.$row["artisitname"].'
                                                <br>'.$row["adesc"].'</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
}
$sql = "SELECT * FROM artist where moviename='$mname' AND artisttype='producer'";
$rs = mysqli_query($con,$sql);
$count = mysqli_num_rows($rs);

while($row = mysqli_fetch_assoc($rs))
{

echo'
                                <!-- Single Show Item -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-show-item mb-30">
                                        <img src="../profile/'.$row["profile"].'
                                        " alt="">
                                        <div class="overlay-content">
                                            <div class="text-center">
                                               <span>'.$row["artisttype"].'</span>
                                                <h5>'.$row["artisitname"].'
                                                <br>'.$row["adesc"].'</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                            $sql = "SELECT * FROM artist where moviename='$mname' AND artisttype='cinematography'";
$rs = mysqli_query($con,$sql);
$count = mysqli_num_rows($rs);

while($row = mysqli_fetch_assoc($rs))
{

echo'                            

                                <!-- Single Show Item -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-show-item mb-30">
                                        <img src="../profile/'.$row["profile"].'" alt="">
                                        <div class="overlay-content">
                                            <div class="text-center">
                                               <span>'.$row["artisttype"].'</span>
                                                <h5>'.$row["artisitname"].'
                                                <br>'.$row["adesc"].'</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
$sql = "SELECT * FROM artist where moviename='$mname' AND artisttype='music director'";
$rs = mysqli_query($con,$sql);
$count = mysqli_num_rows($rs);

while($row = mysqli_fetch_assoc($rs))
{

echo'
                                <!-- Single Show Item -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-show-item mb-30">
                                        <img src="../profile/'.$row["profile"].'" alt="">
                                        <div class="overlay-content">
                                            <div class="text-center">
                                               <span>'.$row["artisttype"].'</span>
                                                <h5>'.$row["artisitname"].'
                                                <br>'.$row["adesc"].'</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }

$sql = "SELECT * FROM artist where moviename='$mname' AND artisttype='production controller'";
$rs = mysqli_query($con,$sql);
$count = mysqli_num_rows($rs);

while($row = mysqli_fetch_assoc($rs))
{

echo'                            

                                <!-- Single Show Item -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-show-item mb-30">
                                        <img src="../profile/'.$row["profile"].'" alt="">
                                        <div class="overlay-content">
                                            <div class="text-center">
                                               <span>'.$row["artisttype"].'</span>
                                                <h5>'.$row["artisitname"].'
                                                <br>'.$row["adesc"].'</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
$sql = "SELECT * FROM artist where moviename='$mname' AND artisttype='singer'";
$rs = mysqli_query($con,$sql);
$count = mysqli_num_rows($rs);

while($row = mysqli_fetch_assoc($rs))
{

echo'                            

                                <!-- Single Show Item -->
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="single-show-item mb-30">
                                        <img src="../profile/'.$row["profile"].'" alt="">
                                        <div class="overlay-content">
                                            <div class="text-center">
                                               <span>'.$row["artisttype"].'</span>
                                                <h5>'.$row["artisitname"].'
                                                <br>'.$row["adesc"].'</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
?>
    <!-- Show Routine Area End -->

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