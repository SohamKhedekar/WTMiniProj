<?php 
session_start();

include 'dbh.php'; 

$email=$_POST["email"];
$pwd=$_POST["pwd"];

$sql="SELECT * FROM user1 WHERE email='$email' AND pwd='$pwd'";

$result = mysqli_query($conn,$sql);

if(!$row=mysqli_fetch_assoc($result)){
	echo "<script type='text/javascript'>alert('Your username or password is incorrect!');</script>";
	header("refresh: 0; URL=index.php");
}
else{
	$_SESSION['id']=$row['id'];
	header("Location: index_1.php");
}


?> 