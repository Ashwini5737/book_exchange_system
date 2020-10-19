<?php

$text = "";
if (isset($_POST['submit'])) {//to run PHP script on submit
    if (!empty($_POST['checklist'])) {
        $len = sizeof($_POST['checklist']);
// Loop to store and display values of individual checked checkbox.
        for ($i = 0; $i < $len; $i++) {
            if ($i != 0) {
                $text .= ", ";
            }
            $text .= '"' . $_POST['checklist'][$i] . '"';
        }
    }
}
?>
<?php

include 'connection.php';

$sql_stmt = 'delete from booksinfo where BookName in(' . $text . ')';
//SQL select query 

$result = mysqli_query($dbhandle, $sql_stmt);
//execute SQL statement and get the object of query

header('Location:http://localhost/wt/viewbook_php.php');
if (!$result) {
    die("database access failed" . mysqli_errno($con));
}
?>