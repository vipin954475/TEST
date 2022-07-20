<?php
include'../connect.php';
$id=$_GET['mid'];
$sql = "SELECT * FROM notification WHERE nid='$id'";
$rs = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($rs))
{
	$count = $row['count'];
}
$count=$count-1;
$sql="UPDATE notification set count='$count' where nid='$id'";
mysqli_query($con,$sql);
echo '<script>window.location="viewnotification.php";</script>';
?>