<?php 
session_start();

include 'dbh.php'; 

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$pwd=$_POST['pwd'];

$sql="INSERT INTO user1 (name, email, mobile, pwd) 
VALUES('$name','$email','$mobile','$pwd')";

$result = mysqli_query($conn,$sql);
mysqli_commit($conn);

$sql="SELECT * FROM user1 WHERE email='$email' AND pwd='$pwd'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$_SESSION['id']=$row['id'];

header("Location: index_1.php");
?>