<!DOCTYPE html>

<html lang="en" >


    <head>

        <meta charset="UTF-8">

        <title>Table</title>

        <link rel="stylesheet" href="css/style.css">



        <style>
            #below { 
                height:600px; 
                width:100%; 

            }
            img {
                float: right;
            }
            p {
                margin-left: 100px; 
                padding: 35px;
                height:300px;
                font-size:22px;
            }
            h1 {
                text-align: center;}
            h4{
            margin-left:250px;
            }
            input
            {
            width:35%;
            }
            button {
                background-color: Black;
                border-radius: 12px;
                color: white;
                padding: 15px 25px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 20px;
                margin: 4px 920px;
                cursor: pointer;
            }
        </style>
    </head>


    <body>

        <form method="POST" action="mailback.php">
            <?php
            $noofdays = "";
                $email ="";
                $bookname = "";
                $firstname ="";
            echo '<h1>'."DETAILS".'</h1>';
            $len = sizeof($_POST['id']);
// Loop to store and display values of individual checked checkbox.
            for ($i = 0; $i < $len; $i++) {

                $noofdays = $_POST["id"][$i];
                $email = $_POST["email"][$i];
                $bookname = $_POST["bookname"][$i];
                $firstname = $_POST["firstname"][$i];
            }

            echo '<h4>' . "You are giving book name is :" .'<input type="text" name="bookname" value="' . $bookname . '">'.'</h4>';
echo '<h4>' . "You are exchanging book for:" .'<input type="text" name="noofdays" value="' . $noofdays . '">'.'</h4>';
echo '<h4>' . "You are exchanging with:" .'<input type="text" name="firstname" value="' . $firstname . '">'.'</h4>';
echo '<h4>' . "Email address of person:" .'<input type="text" name="email" value="' . $email . '">'.'</h4>';

            echo '<h1>LIBRARY</h1>' .
            '<div id="below">' .
            '<div class="table-users">' .
            '<div class="header">Catalog</div>' .
            '<table cellspacing="0">' .
            '<tr>' .
            '<th>Select</th>' .
            '<th>Book Name</th>' .
            '<th>Author</th>' .
            '</tr>';





            // put your code here

            include 'connection.php';
            $username = $_SESSION["username2"];
            //reading from existing database
            $sql_stmt = "SELECT BookName, Author FROM booksinfo where UserName='$username'";
            //SQL select query 

            $result = mysqli_query($dbhandle, $sql_stmt);
            //execute SQL statement and get the object of query

            if (!$result) {
                die("database access failed" . mysqli_errno($dbhandle));
            }

            $no_rows = mysqli_num_rows($result);
            //get total rows of query object

            if ($no_rows) {

                while ($row = mysqli_fetch_array($result)) {  //row wise of obj query--> array
                    echo '<tr><td>' .
                    '<div class="radio">' .
                    '<input type="radio" name ="id" value="' . $row['BookName'] . '">' .
                    '</div>' .
                    '</td>' .
                    '<td> ' . $row['BookName'] . '</td>' .
                    '<td> ' . $row['Author'] . '</td>' .
                    '</tr>';
                }
            }

            echo '</table>' .
            '</div>';
            ?>
            <button type="submit" style="width:auto;">CONFIRM</button>



        </form>


    </body>


</html>
