<?php
include 'connection.php';
$username=$_SESSION["username"];
$sql="INSERT INTO booksinfo (UserName,BookName,Author,Description,Categories)
VALUES('$username','$_POST[bname]','$_POST[athname]','$_POST[des]','$_POST[cat]')";


 if (!mysqli_query($dbhandle,$sql))

  {

  die('Error: ' . mysqli_error($dbhandle));

  }

echo "1 record added";
mysqli_close($dbhandle);

?>