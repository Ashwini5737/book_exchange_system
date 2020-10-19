<!DOCTYPE html>
<html lang="en" >
    <head>
        <link rel="stylesheet" href="css/style.css">
        <meta charset="UTF-8">
        <title>AboutBook</title>
        <style>
            #below { 
                height:600px; 
                width:100%; 

            }
            #up { 
                height:500px; 
                width:100%; 

            }
            h1 {
                text-align:center;
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
            #noofdaysid
            {
                margin-left: 300px;
                font-size:20px;
                height:0px;
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
                margin: 4px 950px;
                cursor: pointer;
            }
            input[type=text] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            
            select {
                width: 10%;
                padding: 12px 20px;
                left-margin: 120px;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            
            button:hover {
                opacity: 0.8;
            }

            /* Extra styles for the cancel button */
            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }



            .container {
                padding: 16px;
            }


            
            /* The Close Button (x) */
            .close {
                position: absolute;
                right: 25px;
                top: 0;
                color: #000;
                font-size: 35px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: red;
                cursor: pointer;
            }
            span.psw {
                float: right;
                padding-top: 16px;
            }

        </style>

    </head>

    <body>
        <?php
        include 'connection.php';
        error_reporting(0);
        $bookname=$_GET['bookname'];
        session_start();
        $_SESSION["bookname"] =$bookname;
        //$bookname="How Not to a Read";
        //here choosen book should come with query
        $sql_stmt = "SELECT BookName, Description, pics  FROM booksinfo WHERE BookName='".$bookname."'";
        //SQL select query 

        $result = mysqli_query($dbhandle, $sql_stmt);
        //execute SQL statement and get the object of query

        if (!$result) {
            die("database access failed" . mysqli_errno($dbhandle));
        }

        $no_rows = mysqli_num_rows($result);
        //get total rows of query object

        if ($no_rows) {

            $row = mysqli_fetch_array($result);
            echo '<h1>' . $row['BookName'] . '</h1>';
             echo '<div id="up">
            <p><img src="'.$row['pics'].'"  style="width:250px;height:250px;margin-left:15px;">'
            . $row['Description'] . '</p>';
            echo '</div>';
        }
        ?>

        <div id="below">
            <form id="id2" method="post" action="mail.php">
            <div class="table-users">

                <div class="header">Users</div>

                <table cellspacing="0">

                    <tr>
                    <col width="200">
                    <col width="400">
                    <col width="400">

                    <th>Select</th>
                    <th>Name</th>

                    <th>Place</th>

                    </tr>

                    
                    <?php
                // put your code here
           
                include 'connection.php';
             
                //reading from existing database
                $sql_stmt = "SELECT UserName FROM booksinfo where BookName='$bookname'";
                //SQL select query 

                $result = mysqli_query($dbhandle, $sql_stmt);
                //execute SQL statement and get the object of query

                if (!$result) {
                    die("database access failed" . mysqli_errno($dbhandle));
                }

                while ($row = mysqli_fetch_array($result)) {  //row wise of obj query--> array
                        echo '<tr><td>' .
                        '<div class="radio">';
                        $username=$row['UserName'];
                        echo '<input type="radio" name ="id" value="' . $username . '" >' .
                        '</div>' .
                        '</td>' .
                        '<td> ' . $row['UserName'] . '</td>' ;
                        $username=$row['UserName'];
                        $query = mysqli_query($dbhandle,"Select * from infotable"); //Query the users table

                        while($row = mysqli_fetch_array($query)) //display all rows from query

                        {

                        $table_users = $row['UserName']; // the first username row is passed on to $table_users, and so on until the query is finished
                        $place=$row['Place'];

                        if($username == $table_users) // checks if there are any matching fields

                        {

                        $place1 = $place; // sets bool to false 
                        break;

                        }
        }
                        
                         
                        echo '<td> ' .$place1 .'</td>' .
                        '</tr>';

                    }
                
                ?>
                </table>
            </div>
            <p id="noofdaysid">FOR HOW MANY NO OF DAYS YOU WANT PARTICULAR BOOK :
            <select name="noofdays">
                        <option value="4">4</option>
                        <option value="8">8</option>
                        <option value="12">12</option>
                        <option value="15">15</option>
                        <option value="1">1 month</option>
                    </select></p>


            <button type="submit" >Request</button>
            
            

        </div>
        </form>
</div>

        
    </body>


</html>
