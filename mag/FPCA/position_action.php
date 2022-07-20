<?php
include 'connect.php';
if(isset($_POST['add']))
{
	$post=$_POST['post'];
	$sql="INSERT INTO post(position) VALUES('$post')";
	mysqli_query($con,$sql);
	echo "<script>alert('added successfully');window.location.href='admin.php';</script>";
}
?>