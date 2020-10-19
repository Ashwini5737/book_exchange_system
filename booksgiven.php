<!DOCTYPE html>

<html lang="en" >


    <head>

        <meta charset="UTF-8">

        <title>BooksGiven</title>

        <link rel="stylesheet" href="css/style.css">



        <style>
            h1,td{text-align: center;
               color:White;}
            body{
                background-color:  DimGray;
            }
            table 
            {
            width:50%;
            margin-left: 250px;
            }
            .header
            {
            width:50%;
            margin-left: 250px;
            margin-top: 150px;
            }
            button, #del {
                background-color: Black;
                border-radius: 12px;
                color: white;
                padding: 15px 25px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 20px;
                margin: 4px 1000px;
                cursor: pointer;
            }
            .close {
                position: absolute;
                right: 180px;
                top: 50px;
                color: Black;
                font-size: 35px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: red;
                cursor: pointer;
            }
        </style>
    </head>


    <body>
        

            <table cellspacing="0">
               <div class="header">BOOKS GIVEN</div>
                <tr>
                   
                    <th>Book Name</th>
                    <th>USER</th>

                </tr>

                <?php
                // put your code here

                include 'connection.php';
                $username=$_SESSION["username"];
                //reading from existing database
                $sql_stmt = "SELECT BookName, Username2 FROM booksgiven WHERE UserName1='" . $username . "'";
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
                        echo '<tr>' .
                        '<td> ' . $row['BookName'] . '</td>' .
                        '<td> ' . $row['Username2'] . '</td>' .
                        '</tr>';
                    }
                }
                ?>
            </table>
        </div>

      
    </body>

</html>

