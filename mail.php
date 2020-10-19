

<?php
mysqli_connect("localhost","root","");

$noofdays=$_POST["noofdays"];     //for how many no of days
$user2=$_POST["id"];             //for whom he requested
echo $noofdays;
echo $user2;
session_start();
$user1=$_SESSION["username"];     //requesting person
$book=$_SESSION["bookname"];                      //for which book
include 'connection.php';
//getting email address of that particular user
$query = mysqli_query($dbhandle,"Select * from infotable"); //Query the users table

while($row = mysqli_fetch_array($query)) //display all rows from query

{
$table_users = $row['UserName']; // the first username row is passed on to $table_users, and so on until the query is finished
$email=$row['Email'];
if($user2 == $table_users) // checks if there are any matching fields
{
$getemail =$email; // got email to whom request is to sent(i.e email address of particular person)
break;
}
}
//adding information in notification table who requested whom
$sql="INSERT INTO notificationtable (UserName,BookName,UserName2,Noofdays)
VALUES('$user1','$book','$user2','$noofdays')";


 if (!mysqli_query($dbhandle,$sql))

  {

  die('Error: ' . mysqli_error($dbhandle));

  }

//sending mail                     
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "akshitahedaoo210299@gmail.com";
  $mail->Password = "vit1234$";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "akshitahedaoo210299@gmail.com";
  $mail->FromName = "akshita";
  
  $mail->addAddress($getemail);    
  
  $mail->isHTML(true);
 
  $mail->Subject = "Request regarding exchanging of book";
  $mail->Body = $user1." has requested for ".$book." for ".$noofdays." days.";
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
   header('Location:index.php');
  }
?>