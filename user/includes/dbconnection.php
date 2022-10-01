<!-- 
PPA Project - Amigos
Online Ordering System -->



<?php

$hostname = "localhost";
$username = "root@";
$password = "";
$db = "raj pharmarcy";

$con = mysqli_connect($hostname, $username, $password, $db); 
	if (!$con) {
  		die("Sorry, Connection failed: " . mysqli_connect_error());
	} 
?>