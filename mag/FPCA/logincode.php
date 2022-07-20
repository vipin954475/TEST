<?php
session_start();
include 'connect.php';
 $username=$_POST['username'];
$pass=$_POST['password'];
 $sql="SELECT * from login where username='$username' and password='$pass'";
$res = mysqli_query($con,$sql);
$count = mysqli_num_rows($res);
if($count>0){
while ($row=mysqli_fetch_assoc($res)) {

  $_SESSION['id']=$row['loginid'];
  $_SESSION['name'] = $row['username'];
  if($row['type'] == 'admin' and $row['status'] ==1)
    header("location:Admin/index.php");

  if($row['type'] == 'controller' and $row['status'] ==1)
    header("location:Controller/index.php");

  if($row['type'] == 'User' and $row['status'] ==1)
    header("location:User/index.php");

 
  else{
  $_SESSION['userid']='';
  echo "<script>alert(' You are not approved');window.location.href='login.php';</script>";
}
  
}
}else{
  $_SESSION['userid']='';
  echo "<script>alert('Invalid login');window.location.href='login.php';</script>";
}
?>