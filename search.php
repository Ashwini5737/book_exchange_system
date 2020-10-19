<?php
error_reporting(0);
//search bar
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include 'connection.php';
        $bookname = $_POST['bkname'];
        $result = mysqli_query($dbhandle, "Select * from booksinfo");
        $bool = false;
        
        $infoarr ="";
       $sql_stmt = "SELECT * FROM booksinfo WHERE BookName LIKE '".$str."' OR Author LIKE '".$str."' OR Categories LIKE '".$str."'";
            //SQL select query 

            $result = mysqli_query($dbhandle, $sql_stmt);
            if (!$result) {
                die("database access failed" . mysqli_errno($dbhandle));
            }

            $no_rows = mysqli_num_rows($result);
            //get total rows of query object

            if ($no_rows) {
              $bool=true;
              $infoarr=$bookname;
            }
     
        $_SESSION['info'] = $infoarr;
        
        if ($bool && $bookname!=NULL) {
          header('Location:http://localhost/wt/actualGenre.php?title=search');
        }

        if (!$bool) {
            echo "no matching found";
        }
    }
    ?>
