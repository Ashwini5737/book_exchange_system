



<?php
include 'connection.php';
 $username= $_POST["UName"];
 $bool = true;
$query = mysqli_query($dbhandle,"Select * from infotable"); //Query the users table

  while($row = mysqli_fetch_array($query)) //display all rows from query

  {

    $table_users = $row['UserName']; // the first username row is passed on to $table_users, and so on until the query is finished

    if($username == $table_users) // checks if there are any matching fields

    {

      $bool = false; // sets bool to false

      echo "Username Already exists";
      break;

    }

  }
 if($bool)
{
$sql="INSERT INTO infotable (FirstName,MiddleName,LastName,Place,MobileNo,Email,UserName,Password)
VALUES('$_POST[FName]','$_POST[MName]','$_POST[LName]','$_POST[place]','$_POST[mbno]','$_POST[email]','$_POST[UName]','$_POST[psw]')";

 if (!mysqli_query($dbhandle,$sql))

  {

  die('Error: ' . mysqli_error($dbhandle));

  }
echo "1 record added";

$_SESSION["username"] =$_POST["UName"];
//header('Location:http://localhost//wt//index.php');
//header('Location:http://localhost:8080/bookexc_netbeans/index.php');
}




?>