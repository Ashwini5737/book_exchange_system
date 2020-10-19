<!DOCTYPE html>

<html lang="en" >


    <head>

        <meta charset="UTF-8">

        <title>AllBooks</title>

        <link rel="stylesheet" href="css/style.css">



        <style>
            .dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
h1{text-align: center;
   color:White;}
body{
background-color:  DimGray;
}
#btn1 {
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
#btn2,#btn3 {
    background-color: Black;
    border-radius: 12px;
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 850px;
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
.table-users1{
display:none;
}
.table-users2{
display:none;
}
        </style>
    </head>


    <body>
    <div class="dropdown">
<button onclick="myFunction3()" class="dropbtn">Choose</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#library" onclick="myFunction2()" >MY LIBRARY</a>
    <a href="#booksgiven" onclick="window.location.href = 'booksgiven.php'">BOOKS GIVEN</a>
    <a href="#bookissued" onclick="window.location.href = 'booksissued.php'">BOOKS ISSUED</a>
    <a href="#addbook" onclick="window.location.href = 'addbook.html'">ADD BOOK</a>
  </div>
</div>
        <form action="nextpage.php" method="POST">
        <h1>BOOKLAND</h1>
        <div class="table-users">


            <div class="header">BOOKS</div>

            <table cellspacing="0">
                <tr>
                    <th>Select</th>
                    <th>Book Name</th>
                    <th>Author</th>

                </tr>

                <?php
                // put your code here

                include 'connection.php';
                $username=$_SESSION["username"];
                //reading from existing database
                $sql_stmt = "SELECT BookName, Author FROM booksinfo WHERE UserName='" . $username . "'";
                //SQL select query 

                $result = mysqli_query($dbhandle, $sql_stmt);
                //execute SQL statement and get the object of query

                if (!$result) {
                    die("database access failed" . mysqli_errno($con));
                }

                $no_rows = mysqli_num_rows($result);
                //get total rows of query object

                if ($no_rows) {

                    while ($row = mysqli_fetch_array($result)) {  //row wise of obj query--> array
                        echo '<tr><td>' .
                        '<div class="checkbox">' .
                        '<input type="checkbox" name="checklist[]" value="' . $row['BookName'] . '">' .
                        '</div>' .
                        '</td>' .
                        '<td> ' . $row['BookName'] . '</td>' .
                        '<td> ' . $row['Author'] . '</td>' .
                        '</tr>';
                    }
                }
                ?>
            </table>
        </div>

        </form>
    <div id="id2" class="table-users1">


<div class="header">BOOKS GIVEN</div>

<table cellspacing="0">

<tr>


<th>NAME OF BOOK</th>
<th>USER</th>
<th>DATE ISSUED</th>
<th>DUE DATE</th>
</tr>



<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</table>
</div>


<div id="id3" class="table-users2">


<div class="header">BOOKS ISSUED</div>

<table cellspacing="0">

<tr>


<th>NAME OF BOOK</th>
<th>USER</th>
<th>DATE ISSUED</th>
<th>DUE DATE</th>
</tr>



<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
</table>
</div>


<button id="btn1"  type="button"  style="width:auto;">Delete Books</button>

<script>
function myFunction() {
    var x = document.getElementById("id1");
    var x1= document.getElementById("id2");
    var x2= document.getElementById("id3");
    var x3= document.getElementById("btn1");
        x.style.display = "none";
        x2.style.display = "none";
        x3.style.display = "none";
        x1.style.display = "block";
        
    
}
function myFunction1() {
    var x = document.getElementById("id1");
    var x1= document.getElementById("id2");
    var x2= document.getElementById("id3");
    var x3= document.getElementById("btn1");
        x.style.display = "none";
        x1.style.display = "none";
        x3.style.display = "none";
        x2.style.display = "block";
    
}
function myFunction2() {
    var x = document.getElementById("id1");
    var x1= document.getElementById("id2");
    var x2= document.getElementById("id3");
    var x3= document.getElementById("btn1");
        x.style.display = "block";
        x3.style.display = "block";
        x2.style.display = "none";
        x1.style.display = "none";
        
    
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction3() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

        
    </body>

</html>