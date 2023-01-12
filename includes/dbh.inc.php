<?php

$serverName = "localhost:4306";
$dbUsername = "root";
$dbPassword = "";
$dbName = "login_system";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}