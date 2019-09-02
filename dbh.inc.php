<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "ipl";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die(mysqli_error());

if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySql: " . mysqli_connect_error();
	}
?>