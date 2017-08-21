<?php
 
 $db=mysqli_connect('localhost','root','','manage');
 if(mysqli_connect_error())
 {
	 echo"database connection failed".mysqli_connect_error();
	 die();
 }
 
 
 
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css\bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
		<script src="js\bootstrap.js"></script>
		</head>
		</html>