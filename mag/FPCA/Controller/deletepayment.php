<?php
include '../connect.php';
session_start();
$id=$_GET['id'];
$sql="delete from payment where pid='$id'";
mysqli_query($con,$sql);
echo '<script>alert("Succesfully Removed");window.location="viewpayment.php";</script>';

?>