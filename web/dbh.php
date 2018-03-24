<?php 

$conn = mysqli_connect("localhost", "root", "", "ticketgo");

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

?>