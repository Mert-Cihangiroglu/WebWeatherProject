<?php

$dbServername = 'localhost' ;
	$dbUsername = "root" ;
	$dbPassword = "";
	$dbName = "WebWeatherProject" ;

	$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) ;
	if($conn->connect_error) {
		die("connection failed : " . $conn->connect_error);
	} 