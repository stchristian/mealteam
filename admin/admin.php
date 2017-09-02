<!DOCTYPE html>
<html lang="hu">
    <head>
    <!--meta-section-->
    <title>Meal Team Airsoft | Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Az ózdi airsoft sportegyesület honlapja. Adminisztrátori felület.">
    <meta name="author" content="László Bence, Hübner Krisztián">
    <meta name="keywords" content="airsoft,sport,mealteam,ózd,sportegyesület,csapatjáték,admin,adminidsztrátor,kezelés">
    <!--facebook-meta-->
    <meta property="og:title" content="Meal Team Airsoft">
    <meta property="og:image" content="img/mealteam-icon.png">
    <meta property="og:description" content="Az ózdi airsoft sportegyesület honlapja. Adminisztrátori felület.">

    <!--Custom Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin.css">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Orbitron|Roboto|Russo+One&amp;subset=latin-ext" rel="stylesheet">

    </head>

    <body onload="currentYear()">

        <main>
             <div class="container-fluid" id="adminWrapper">
                 <h1>Meal Team Airsoft - Adminisztrátori felület</h1>

                 <div class="row">

                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <h2>Új bejegyzés</h2>
                         <form action="new_post.php" method="post">

                             <div class="input-group">
                                 <label for="input-title">Bejegyzés címe</label>
                                 <textarea class="form-control" rows="1" id="input-title" name="input-title"></textarea>
                             </div>

                             <div class="input-group">
                                 <label for="input-post">Bejegyzés szövege</label>
                                 <textarea class="form-control" rows="16" id="input-post" name="input-post"></textarea>
                             </div>

                             <div class="input-group">
                                 <label for="input-user">Felhasználónév</label>
                                 <input type="text" class="form-control" id="input-user" placeholder="ide kéne írni egy admin felhasználónevét" name="input-user">
                             </div>

                             <div class="input-group">
                                 <label for="input-password">Jelszó</label>
                                 <input type="password" class="form-control" id="input-password" placeholder="csillagcsillagcsillagcsillag" name="input-password">
                             </div>

                             <button type="submit" class="btn btn-success">Közzététel</button>

                         </form>

                     </div>

                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <h2>Meglévő bejegyzések</h2>

                         <?php
                            include("admin_news.php");
                          ?>

                         <form action="delete_post.php" method="post">

                             <div class="input-group">
                                 <label for="input-id">Bejegyzés azonosítója (ID)</label>
                                 <textarea class="form-control" rows="1" id="input-id" name="input-id"></textarea>
                             </div>

                             <div class="input-group">
                                 <label for="input-user">Felhasználónév</label>
                                 <input type="text" class="form-control" id="input-user" placeholder="ide kéne írni egy admin felhasználónevét" name="input-user">
                             </div>

                             <div class="input-group">
                                 <label for="input-password">Jelszó</label>
                                 <input type="password" class="form-control" id="input-password" placeholder="csillagcsillagcsillagcsillag" name="input-password">
                             </div>

                              <button type="submit" class="btn btn-danger">Bejegyzés törlése</button>
                         </form>

                     </div>

                 </div>
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
        <script async defer src="../js/currentYear.js"></script>
    </body>
</html>
