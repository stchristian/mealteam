<!DOCTYPE html>
<html lang="hu">
    <head>
    <!--meta-section-->
    <title>Meal Team Airsoft | Kezdőlap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Az ózdi airsoft sportegyesület honlapja.">
    <meta name="author" content="László Bence, Hübner Krisztián">
    <meta name="keywords" content="airsoft,sport,mealteam,ózd,sportegyesület,csapatjáték">
    <!--facebook-meta-->
    <meta property="og:title" content="Meal Team Airsoft">
    <meta property="og:image" content="img/mealteam-icon.png">
    <meta property="og:description" content="Az ózdi airsoft sportegyesület honlapja.">

    <!--Custom Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Font awesome icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
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
                    <a class="navbar-brand" href="index.php" hreflang="hu"><span class="brandlogo"></span> Meal Team</a>

                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="index.php" hreflang="hu">Kezdőlap<span class="sr-only">(current)</span></a></li>
                      <li><a href="gallery.html" hreflang="hu">Galéria</a></li>
                      <li><a href="index.php#rulesWrapper" hreflang="hu">Airsoft Szabályzat</a></li>
                      <li><a href="index.php#contactWrapper" hreflang="hu">Kapcsolat</a></li>
                      <li><a href="index.php#newsWrapper">Hírek</a></li>
                    </ul>
                </div>

            </div>
        </nav>

        <header>
            <div id="headerWrapper">
                <div class="container">
                    <div class="row vertical-align">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
                            <div id="header">
                                <span class="logo"></span><h1>Meal Team <br>Airsoft</h1>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="countdown-timer">
                                <div id="idopont">
                                    <h3>A következő játék időpontja: <br><span id="gameDate"></span></h3>
                                </div>
                                <h5>Hátralévő idő:</h5>
                                    <div class="main-timer">
                                      <div class="timer-block">
                                        <span id="days"></span>
                                        <div class="timer-text">
                                          Nap
                                        </div>
                                      </div><div class="timer-block">
                                        <span id="hours"></span>
                                        <div class="timer-text">
                                          Óra
                                        </div>
                                      </div><div class="timer-block">
                                        <span id="minutes"></span>
                                        <div class="timer-text">
                                          Perc
                                        </div>
                                      </div>
                                    </div>
                                <a href="index.php#applyWrapper">Jelentkezés</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>


        <div id="imgSlider">
            <h1>&ltImage Slider&gt</h1>
        </div>

        <div id="afterSlider">

        </div>

        <section>
            <div id="introWrapper">
                <div class="container">
                    <div class="row vertical-align">
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-9 introText">
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac consectetur augue, quis volutpat urna. Sed id accumsan lorem. Praesent in erat vel lectus rhoncus commodo ac sed arcu. Mauris et mauris lacus. Suspendisse non viverra nunc. Vivamus nec rutrum metus. Sed convallis ante quis justo ultrices iaculis.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/epulet.jpg" alt="" class="img-responsive img-circle introImg">
                        </div>
                    </div>

                    <div class="row vertical-align">
                        <div class="col-xs-12  col-sm-6 col-sm-push-6 col-md-8 col-md-push-4 col-lg-9 col-lg-push-3 introText">
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac consectetur augue, quis volutpat urna. Sed id accumsan lorem. Praesent in erat vel lectus rhoncus commodo ac sed arcu. Mauris et mauris lacus. Suspendisse non viverra nunc. Vivamus nec rutrum metus. Sed convallis ante quis justo ultrices iaculis.
                            </p>

                        </div>
                        <div class="col-xs-12  col-sm-6 col-sm-pull-6 col-md-4 col-md-pull-8 col-lg-3 col-lg-pull-9">
                            <img src="img/epulet.jpg" alt="" class="img-responsive img-circle introImg">
                        </div>

                    </div>

                    <div class="row vertical-align">
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-9 introText">
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac consectetur augue, quis volutpat urna. Sed id accumsan lorem. Praesent in erat vel lectus rhoncus commodo ac sed arcu. Mauris et mauris lacus. Suspendisse non viverra nunc. Vivamus nec rutrum metus. Sed convallis ante quis justo ultrices iaculis.
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="img/epulet.jpg" alt="" class="img-responsive img-circle introImg">
                        </div>
                    </div>

                </div><!-- End of container-->
            </div>
        </section>

        <section>
            <div id="newsWrapper">
                <div class="container-fluid">
                    <div class="row">
                        <h2>Hírek</h2>
                        <?php
                            include "admin/news.php";
                        ?>
                    </row>
                </div>
            </div>
        </section>

        <section>
            <div id="applyWrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6-col-lg-6">
                            <h2 id="join-game">Jelentkezés</h2>
                            <form action="">
                                <div class="form-group">
                                    <label for="name">Név:</label><br>
                                    <input type="text" name="nev" id="name" value="">
                                </div>
                                <div class="form-group">
                                    <label>Elmúltál már 16 éves?</label><br>
                                    <input type="radio" name="elmult" value="igen" checked>Igen<br>
                                    <input type="radio" name="elmult" value="nem">Nem
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6-col-lg-6">
                            <h3>Mielőtt jelentkeznél</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac consectetur augue, quis volutpat urna. Sed id accumsan lorem. Praesent in erat vel lectus rhoncus commodo ac sed arcu. Mauris et mauris lacus. Suspendisse non viverra nunc. Vivamus nec rutrum metus. Sed convallis ante quis justo ultrices iaculis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div id="contactWrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h2>Kapcsolat</h2>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
                                    <h3><i class="fa fa-map-marker" aria-hidden="true"></i> Térkép</h3>
                                    <div id="map"></div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <h2>Elérhetőségek</h2>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h3>Pálya címe</h3>
                                        <p>3600 Ózd, Bolyki főút 64. (volt Ruhagyár épülete)</p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h3><i class="fa fa-phone" aria-hidden="true"></i> Telefon</h3>
                                        <p><a href="tel:+36305559492">+36 (30) 555-9492</a></p>
                                        <p><a href="tel:+36306390398">+36 (30) 639-0398</a></p>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <iframe id="facebook-widget" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmealteam01&tabs=timeline&width=300&height=200&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=111047142920446" width="100%" height="auto" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                    <h3>Vedd fel velünk a kapcsolatot</h3>
                                    <form action="mailto:mealteam.airsoft@gmail.com" method="post">
                                        <label>Név</label><br>
                                        <input type="text" name="name" placeholder="Nevesincs Norbert"><br>
                                        <label>E-mail cím</label><br>
                                        <input type="email" name="email" placeholder="nevesincs@cimese.hu"><br>
                                        <label>Tárgy</label><br>
                                        <input type="text" name="subject" placeholder="Miről szeretnél beszélni?"><br>
                                        <label for="message">Üzenet</label><br>
                                        <textarea name="message" id="message" rows="8" cols="40" placeholder="Azért írok mert..."></textarea><br>
                                        <button type="submit" class="btn btn-primary">Küldés</button>
                                    </form>
                                </div>

                                <button class="btn btn-default">
                                    <a href="index.php" hreflang="hu">&uarr; Az oldal tetejére</a>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer class="container-fluid text-center">
          <div class="copyright">
            <span id="current-year"></span> &copy; Meal Team Airsoft Sportegyesület
          </div>
        </footer>

        <!-- Latest jquery -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <!-- Boostrap 3.3.7 js -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!--Loads the current year to footer-->
        <script async defer src="js/currentYear.js"></script>
        <!--Timer to the next event-->
        <script async defer src="js/timer.js"></script>
        <!--Google Maps map loader-->
        <script src="js/mapLoader.js"></script>
        <!--Google Maps API key and callback-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCprHmezoyrGU7uShKwj-0Ql95GaEUJQ6g&callback=myMap"></script>


    </body>
</html>
