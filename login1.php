<?php
include 'connection.php';
$username=$_POST['uname'];
$password=$_POST['psw'];
//First lets get the username and password from the user
$result = mysqli_query($dbhandle,"Select * from infotable");
$bool=true;

while($row = mysqli_fetch_array($result)) //display all rows from query

  {

    $table_users = $row['UserName']; // the first username row is passed on to $table_users, and so on until the query is finished
    $table_users1 = $row['Password'];
    if($username == $table_users && $password == $table_users1 ) // checks if there are any matching fields

    {

      $bool = false; // sets bool to false
      $_SESSION["username"] =$_POST["uname"];
      header('Location:http://localhost//wt//index.php');
      break;

    }

  }
if($bool)
{
echo ("Username or password not exist");
}

?>