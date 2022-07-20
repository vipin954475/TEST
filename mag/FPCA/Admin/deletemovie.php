<?php
include '../connect.php';
session_start();
$id=$_GET['id'];
$sql="delete from movie where mid=$id";
mysqli_query($con,$sql);
echo '<script>alert("Succesfully Removed");window.location="viewmovie.php";</script>';

?>