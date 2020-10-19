<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" dbhandletent="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="account_css.css">

    </head>
    <body>
        <div class="sidebar">
            <a href="#notifications"><i class="fa fa-fw fa-wrench"></i> Notifications</a>
            <a href="#aboutme"><i class="fa fa-fw fa-user"></i> About me</a>
            <a href="#dbhandletact"><i class="fa fa-fw fa-envelope"></i> dbhandletact</a>
        </div>


        <div id="notifications" class="main">

            <h2>Request For Book Exchange</h2>
          

                <?php
                // put your code here

                include 'connection.php';
                 $username = $_SESSION["username"];
                //$username = "shreya";
                //reading from existing database
                $query_main = mysqli_query($dbhandle, "Select * from notificationtable WHERE UserName2='" . $username . "'"); //Query the users table
                $no_rows = mysqli_num_rows($query_main);
             
                while ($row = mysqli_fetch_array($query_main)) { //display all rows from query
                    
                    $table_users = $row['UserName2'];
                    $bookname = $row['BookName'];
                    $noofdays = $row['Noofdays'];
                    $user2 = $row['UserName'];
                    $_SESSION["username2"]=$user2;
                     echo ' <form method="POST" action="user2.php">';
                    echo '  <div class="container row">';
                    echo '<div class="info">' ;
                   
                    //'<h2> ' . "Book-name :" . $bookname . '</h2>';
                    echo '<h2>' . "Book-name:" .'<input type="text" name="bookname[]" value="' . $bookname . '">'.'</h2>';
                    $stm = "Select Description, pics from booksinfo WHERE BookName='" . $bookname . "'";
                    $query2 = mysqli_query($dbhandle, $stm); //Query the users table

                    $row = mysqli_fetch_array($query2); //display all rows from query
                    $description = $row['Description'];

                    //echo '<p>' . "description:" . $description . '</p>' .
                    echo '<p>' . "description:" .'<input type="text" name="description" value="' . $description . '">'.'</h2>'.
                    '</div>' .
                    '<div class="pic">' .
                    '<img src="'.$row['pics'].'">' .
                    '</div>';

                    echo '</div>';

                    echo '<div class="container row" style="background-color:white">';
                    echo '<h3>' . "Details of user who has requested" . '</h3>' .
                    '<div class="info">';
                    $stm = "Select * from infotable WHERE UserName='" . $user2 . "'";
                    $query = mysqli_query($dbhandle, $stm); //Query the users table

                    $row = mysqli_fetch_array($query); //display all rows from query

                    $firstname = $row['FirstName'];
                    $lastname = $row['LastName'];
                    $email = $row['Email'];
                    $gender = $row['Gender'];
                    echo '<h4>' . "Name of person:" .'<input type="text" name="firstname[]" value="' . $firstname." ".$lastname . '">'.'</h4>';
                    //echo '<input type="text" name="firstname" value="' . $firstname . '">';
                    echo '<p>' . "Email address of person:" .'<input type="text" name="email[]" value="' . $email . '">'. '</p>';
                    //echo '<input type="text" name="name" value="' . $email . '">';
                    echo '<p>' . "Gender:" .'<input type="text" name="gender" value="' . $gender . '">' . '</p>' .
                    '</div>' .
                    '<div class="pic">' .
                    '<img src="images/person.png" height="200px">' .
                    '</div>' .
                    '</div>' .
                    '<div class="container">' .
                    '<h2 id="name_requester">' . "requester" . '</h2>' .
                    "wants it for" . "_" . $noofdays . " " . "no. of days" .
                    '<p>' . "But ofcourse you can negotiate later" . '</p>' .
                    '</div>';
                    echo '<label for="noofdays"><b>No Of Days</b></label>'.
                    '<select name="id[]">'.
                        '<option value="4">4</option>'.
                        '<option value="8">8</option>'.
                        '<option value="12">12</option>'.
                        '<option value="15">15</option>'.
                        '<option value="1">1 month</option>'.
                    '</select>';

                    echo '<br><br>
                    <div class="container">
                        <h2>Do you want to exchange??</h2>
                        <input id="btn1[]" type="submit" value="YES!!!">
                        <input id="no-button" type="submit" value="NO">
                    </div>
                                </form>';
                }
                ?>
        </div>
        <div id="id01" class="modal">

            <form class="modal-content animate" method="POST" action="mailback.php">
               
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display = 'none'  class = 'close' title = 'Close Modal'">&times;</span>
                </div>
                <div class="container">
                    <label for="noofdays"><b>No Of Days</b></label>
                    <select name="id">
                        <option value="4">4</option>
                        <option value="8">8</option>
                        <option value="12">12</option>
                        <option value="15">15</option>
                        <option value="1">1 month</option>
                    </select>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                </div>
                <input type="submit" value="submit">
               ?>
            </form>
        </div>


        <script>
            // Get the modal
            var modal = document.getElementById("id01");
            var email = document.getElementById("

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>


        <div id="aboutme" class="main">
            <br><br>

            <form method="POST" action="save.php">

                <div class="container">
                    <h2>About Me</h2>

                </div>
<?php
error_reporting(0);
include 'connection.php';
//$username = "shreya"; 
$username=$_SESSION["username"];
//reading from existing database
$sql_stmt = "SELECT * FROM infotable where UserName='$username'";
//SQL select query 

$result = mysqli_query($dbhandle, $sql_stmt);
//execute SQL statement and get the object of query

if (!$result) {
    die("database access failed" . mysqli_errno($dbhandle));
}

$no_rows = mysqli_num_rows($result);
//get total rows of query object


$row = mysqli_fetch_array($result);
echo '<div class="container row" style="background-color:white">';
echo '<hr>';
echo '<img src="images/person.png" height="200px" style="margin-left:300px">';
echo '<br>';
echo '<label for="FName"><b>Firstname</b></label>';
echo '<input type="text" name="FName" value="' . $row['FirstName'] . '">';


echo '<label for="LName"><b>Lastname</b></label>';
echo '<input type="text" name="LName" value="' . $row['LastName'] . '">';

echo '<label for="place"><b>Place</b></label>';
echo '<input type="text" name="place" value="' . $row['Place'] . '">';

echo '<label for="mob"><b>Mobile No</b></label>';
echo '<input type="tel" name="mbno" value="' . $row['MobileNo'] . '">';

echo '<label for="email"><b>Email</b></label>';
echo '<input type="email" name="email" value="' . $row['Email'] . '">';
?>
                <input type="submit" value="Save">


            </form>



        </div>
        <div id="footer" class="container" >
            <p>Book Exchange Website</p>
        </div>
    </body>
</html> 