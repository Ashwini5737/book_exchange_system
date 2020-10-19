<?php
$username = "root";
$password = "";
$hostname = "localhost"; 
session_start();
//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";
//select a database to work with

$selected = mysqli_select_db($dbhandle,"signuptable") 
  or die("Could not select examples");
?>