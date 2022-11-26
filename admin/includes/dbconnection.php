<!-- 
PPA Project - Amigos
Online Ordering System -->



<?php

$hostname = "us-cdbr-east-06.cleardb.net";
$username = "be74e51f04ea1a";
$password = "b3d29cb1";
$db = "heroku_88f964d9f1531d1";

$con = mysqli_connect($hostname, $username, $password, $db); 
	if (!$con) {
  		die("Sorry, Connection failed: " . mysqli_connect_error());
	} 
?>
