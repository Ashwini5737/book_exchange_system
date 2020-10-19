<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>genre</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="categories_css.css" />
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("h1 a").css("color", "#a9a9a9");

                $(".books .header").click(function () {
                    text = $(this).text();
                    window.location.href = 'aboutbook_php.php?bookname=' + text;
                });

            });
        </script>
    </head>
    <body>

        <div id="header_title">
            <?php
            error_reporting(0);
            $title = $_GET['title'];
            if ($title == "search") {
                $title = "Based on your search results...";
            }
            echo '<h1><a href="#">' . $title . '</a></h1>';
            ?>
        </div>

        <div class="row">


            <?php
            // put your code here
            include 'connection.php';
            session_start();
           $title = $_GET['title'];
           if($title=="search"){
                $str = $_SESSION['info'];
                
           }
            else{
                $str= $title;
            }

            //reading from existing database
            // SELECT * FROM booksinfo WHERE BookName LIKE 'hhdth' OR Author LIKE 'hhdth' OR Categories LIKE 'hhdth'
            $sql_stmt = "SELECT * FROM booksinfo WHERE BookName LIKE '" . $str . "' OR Author LIKE '" . $str . "' OR Categories LIKE '" . $str . "'";
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
                    echo "<div class='columns'>" .
                    "<ul class='books'>" .
                    "<li class='header'>" . $row['BookName'] . "</li>" .
                    '<li> <img src="'.$row['pics'].'"> </li>' .
                    '<li>' . $row['Description'] . '</li>' .
                    '  </ul>' .
                    '</div>';
                }
            }
            ?>
        </div>
    </body>
</html>
