<?php
mysqli_connect("localhost","root","");
session_start();
$username1=$_SESSION["username"];
$username2=$_SESSION["username2"];
echo $username2;
$noofdays=$_POST["noofdays"];
echo $noofdays;
$email=$_POST["email"];
echo $email;
$bookname=$_POST["bookname"];
echo $bookname;
$bookexchgname=$_POST["id"];
echo $bookexchgname;
include 'connection.php';
$sql="INSERT INTO booksgiven (UserName1,BookName,UserName2)
VALUES('$username1','$bookname','$username2')";

 if (!mysqli_query($dbhandle,$sql))

  {

  die('Error: ' . mysqli_error($dbhandle));

  }
$sql="INSERT INTO booksissued (UserName2,BookName,UserName1)
VALUES('$username2','$bookname','$username1')";

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
  
  $mail->addAddress($email);    
  
  $mail->isHTML(true);
 
  $mail->Subject = "Regarding acceptance related to exchanging of book";
  $mail->Body = "Person Name ".$username1." accepted your request for bookname ".$bookname." for no of days: ".$noofdays." he is expecting ".$bookexchgname." in return";
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