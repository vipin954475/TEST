<?php
include '../connect.php';
session_start();
$id=$_GET['id'];
$sql="delete from notification where nid='$id'";
mysqli_query($con,$sql);
echo '<script>alert("Succesfully Removed");window.location="viewnotifications.php";</script>';
?>