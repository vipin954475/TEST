<?php
session_start();
if($_SESSION){
	include '../connect.php';
	$id=$_GET['id'];
	$sql="update login set status='1' where login_id='$id'";
	mysqli_query($con, $sql) or die(mysqli_error($con));
	echo "<script> window.location.href='index.php';</script>";
}
else{
	header('Location: ../login.php');
}
?>