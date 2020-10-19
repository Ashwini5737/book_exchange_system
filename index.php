<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title> Homepage </title>
        <link rel="stylesheet" href="home_css.css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

</head>
<body>
<?php
    error_reporting(0);
    session_start();
// Echo session variables that were set on previous page
    echo "Hello " . $_SESSION["username"] . "!!!<br><br>";
    include 'search.php';
    ?>
    <div id="header-wrapper">
        <div id="header">
            <div id="logo">
                <h1><a href="#">Book Exchange</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <?php
                    error_reporting(0);
                    session_start();
                    //$_SESSION["username"]="";
                    $user = $_SESSION["username"];
                    if ($user == "") {
                        echo '<li><a href="login1.html" accesskey="2">Login</a></li>';
                        echo '<li><a href="signup.html" accesskey="1">Signup</a></li>';
                        echo '<li><a href="#welcome" accesskey="5">About Us</a></li>';

                        echo '<li><a href="categories.php" accesskey="3" >Categories</a></li>';
                    } else {
                        echo '<li><a href="logout.php" accesskey="6" >LogOut</a></li>';
                        echo '<li><a href="#welcome" accesskey="5">About Us</a></li>';
                        echo '<li><a href="viewbook_php.php" >My Books</a></li>';
                        echo '<li><a href="my_account.php" accesskey="4">Account</a></li>';
                        echo '<li><a href="categories.php" accesskey="3" >Categories</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div id="banner" >
            <div class="wrap">
                <form method="post" action="index.php">
                    <div class="search">
                        <input name="bkname" type="text" class="searchTerm" placeholder="What are you looking for?">
                        <button type="submit" class="searchButton">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div id="welcome" class="container">


        <h1>About us</h1>
        <div class="row">
            <div class="columns">
                <img src="images/about.jpg" alt="" width="350" height="250" >
            </div>

            <div class="columns" id="right">
                <p>Our website helps those users who wants to exchange their books for certain no of days.</p>
                <p>
                    If you want to exchange, search for your favourite book, then choose among the users, send request, decide place and exchange. </p>
            </div>
        </div>
    </div>
    <div id="footer" class="container">
        <p>Book Exchange Website</p>
    </div>
    
</body>
</html>
