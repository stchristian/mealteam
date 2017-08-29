<!DOCTYPE html>
<html lang="hu">
    <head>
    <!--meta-section-->
    <title>Meal Team Airsoft | Hírek</title>
    <meta charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Az ózdi airsoft sportegyesület honlapja. Hírek.">
    <meta name="author" content="László Bence, Hübner Krisztián">
    <meta name="keywords" content="airsoft,sport,mealteam,ózd,sportegyesület,csapatjáték,hírek">
    <!--facebook-meta-->
    <meta property="og:title" content="Meal Team Airsoft">
    <meta property="og:image" content="img/mealteam-icon.png">
    <meta property="og:description" content="Az ózdi airsoft sportegyesület honlapja. Hírek.">

    <!--Custom Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/news.css">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Orbitron|Roboto|Russo+One&amp;subset=latin-ext" rel="stylesheet">

    </head>

    <body onload="currentYear()">

        <!-- Navigation bar -->
        <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
            <div class="container-fluid">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html" hreflang="hu"><span class="brandlogo"></span> Meal Team</a>

                </div>


                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="index.html" hreflang="hu">Kezdőlap<span class="sr-only">(current)</span></a></li>
                      <li><a href="gallery.html" hreflang="hu">Galéria</a></li>
                      <li><a href="index.html#rules-section" hreflang="hu">Airsoft Szabályzat</a></li>
                      <li><a href="index.html#contact-section" hreflang="hu">Kapcsolat</a></li>
                      <li><a href="news.php" hreflang="hu">Hírek</a></li>
                    </ul>
                </div>

            </div>
        </nav>

        <main>
            <div class="container-fluid" id="newsWrapper">
            <?php
                include("admin/config.php");
                header("Content-type: text/html; charset=utf-8");

                $sql = 'SELECT * FROM posts';
                mysqli_set_charset($connection,"utf8");
                $query = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_array($query))
                {
                    echo '<div><h2>' . $row['title'] . '<br><small>' . $row['date'] . ' | ' . $row['user'] . '</small></h2><article>' . $row["post"] . '<article></div>';
                }

                mysqli_close($connection);
             ?>
         </div>
        </main>

        <footer class="container-fluid">
            <div class="copyright">
              <span id="current-year"></span> &copy; Meal Team Airsoft Sportegyesület
            </div>
        </footer>

        <!-- Latest jquery -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <!-- Boostrap 3.3.7 js -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!--Loads the current year to footer-->
        <script async defer src="js/currentYear.js"></script>
    </body>
</html>
