<?php
include 'connection.php';
$user=$_SESSION["username"];
$sql="UPDATE infotable SET FirstName='$_POST[FName]',LastName='$_POST[LName]',Place='$_POST[place]',MobileNo='$_POST[mbno]',Email='$_POST[email]'
WHERE UserName='$user'";

 if (!mysqli_query($dbhandle,$sql))

  {

  die('Error: ' . mysqli_error($dbhandle));

  }

header('Location:http://localhost//wt//my_account.php');


?>