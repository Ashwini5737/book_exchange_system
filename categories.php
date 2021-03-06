<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title> Categories </title>
        <link rel="stylesheet" href="categories_css.css" />
        <link rel="stylesheet" href="home_css.css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("h1 a").css("color", "#a9a9a9");

                $(".books .header").click(function () {
                    text = $(this).text();
                    window.location.href = 'aboutbook_php.php?bookname=' + text;

                });

            });

            $(document).ready(function () {
                $("#menu li a").click(function () {
                    text = $(this).text();
                    window.location.href = 'actualGenre.php?title=' + text;

                });

            });
        </script>

    </head>

    <body>
        <?php
         include 'search.php';
        ?>
        <div id="header">
            <div id="header_title">
                <h1><a href="#">Choose your section...</a></h1>
            </div>
            <div id="menu">
                <ul>


                    <li><a href="#" accesskey="2" title="">Children's</a></li>
                    <div class="dropdown">
                        <li><a href="#" accesskey="3" title="">Mysteries/Thriller</a>
                            <div class="dropdown-content">

                                <a href="#">Crime Fiction</a>
                                <a href="#">Psychological Thriller</a>
                                <a href="#">Thriller</a>
                                <a href="#">Supernatural Suspense</a>

                            </div>
                        </li>
                    </div>
                    <li><a href="#" accesskey="4" title="">Horror</a></li>
                    <div class="dropdown">
                        <li ><a href="#" accesskey="5" title="" >Fiction</a>
                            <div class="dropdown-content">

                                <a href="#">Fiction</a>
                                <a href="#">Historical Fiction</a>
                                <a href="#">Science Fiction</a>

                            </div>
                        </li>
                    </div>
                    <div class="dropdown">
                        <li ><a href="#" accesskey="6" title="">Romance</a>
                            <div class="dropdown-content">

                                <a href="#">Contemporary</a>
                                <a href="#">Historical</a>

                            </div>
                        </li>
                    </div>
                    <li><a href="#" accesskey="7" title="">Fantasy</a></li>
                    <li><a href="#" accesskey="8" title="">Series</a></li>
                    <div class="dropdown">
                        <li ><a href="#" accesskey="9" title="">General</a>
                            <div class="dropdown-content">

                                <a href="#">Non-fiction</a>
                                <a href="#">Biographies</a>
                                <a href="#">History</a>
                                <a href="#">Comics</a>

                            </div>
                        </li>
                    </div>
                </ul>
            </div>

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


        <h2 id="subtitle">Most Popular Books....... </h2>
        <div class="row">
            <div class="columns">
                <ul class="books">
                    <li class="header">Twillight</li>
                    <li> <img src="images/twillight.jpg"> </li>

                    <li>Twilight (stylized as twilight) (2005) is a young adult vampire-romance novel by author Stephenie Meyer. It is the first book in the Twilight series, and introduces seventeen-year-old Isabella "Bella" Swan, who moves from Phoenix, Arizona to Forks, Washington. She is endangered after falling in love with Edward Cullen, a vampire. </li>

                </ul>
            </div>
            <div class="columns">
                <ul class="books">
                    <li class="header">Twillight</li>
                    <li> <img src="images/twillight.jpg"> </li>

                    <li>Twilight (stylized as twilight) (2005) is a young adult vampire-romance novel by author Stephenie Meyer. It is the first book in the Twilight series, and introduces seventeen-year-old Isabella "Bella" Swan, who moves from Phoenix, Arizona to Forks, Washington. She is endangered after falling in love with Edward Cullen, a vampire. </li>

                </ul>
            </div>
            <div class="columns">
                <ul class="books">
                    <li class="header">Twillight</li>
                    <li> <img src="images/twillight.jpg"> </li>

                    <li>Twilight (stylized as twilight) (2005) is a young adult vampire-romance novel by author Stephenie Meyer. It is the first book in the Twilight series, and introduces seventeen-year-old Isabella "Bella" Swan, who moves from Phoenix, Arizona to Forks, Washington. She is endangered after falling in love with Edward Cullen, a vampire. </li>

                </ul>
            </div>
            <div class="columns">
                <ul class="books">
                    <li class="header">Twillight</li>
                    <li> <img src="images/twillight.jpg"> </li>

                    <li>Twilight (stylized as twilight) (2005) is a young adult vampire-romance novel by author Stephenie Meyer. It is the first book in the Twilight series, and introduces seventeen-year-old Isabella "Bella" Swan, who moves from Phoenix, Arizona to Forks, Washington. She is endangered after falling in love with Edward Cullen, a vampire. </li>

                </ul>
            </div>
        </div>

        <div id="footer">

            <p>THANK YOU !! for visiting our website</p>
        </div>

    </body>
</html> 