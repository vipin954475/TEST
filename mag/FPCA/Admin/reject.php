<?php
include '../connect.php';
session_start();
$id=$_GET['id'];
$sql="delete from login where login_id=$id";
mysqli_query($con,$sql);
echo '<script>window.location="index.php";</script>';

?>