<?php
include '../connect.php';
session_start();
$id=$_GET['id'];
$sql="DELETE FROM artist WHERE artistid = '$id'";
mysqli_query($con,$sql);
echo '<script>alert("Succesfully Removed");window.location="viewartist.php";</script>';

?>