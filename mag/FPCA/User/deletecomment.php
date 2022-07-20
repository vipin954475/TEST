<?php
include '../connect.php';
session_start();
$id=$_GET['id'];
$sql="DELETE from comment where cid='$id'";
mysqli_query($con,$sql);
$sql = "SELECT * FROM comment WHERE cid='$id'";
$rs = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($rs))
{
 $name = $row['moviename'];
 }
$sql = "SELECT * FROM ccount where movie = '$name'";
$rs = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($rs))
{
 $count = $row['count'];
 }
$count = $count-1;
$sqlCount = "UPDATE ccount SET count ='$count' where movie='$name'";
mysqli_query($con,$sqlCount);
echo '<script>window.location="viewmovie.php";</script>';
?>