<!DOCTYPE html>
<html lang="hu">
    <head>
    <!--meta-section-->
    <title>Meal Team Airsoft | Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Az ózdi airsoft sportegyesület honlapja. Adminisztrátor belépés.">
    <meta name="author" content="László Bence, Hübner Krisztián">
    <meta name="keywords" content="airsoft,sport,mealteam,ózd,sportegyesület,csapatjáték,admin,adminidsztrátor,kezelés">
    <!--facebook-meta-->
    <meta property="og:title" content="Meal Team Airsoft">
    <meta property="og:image" content="img/mealteam-icon.png">
    <meta property="og:description" content="Az ózdi airsoft sportegyesület honlapja. Adminisztrátor belépés.">

    <!--Custom Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin.css">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Orbitron|Roboto|Russo+One&amp;subset=latin-ext" rel="stylesheet">

    </head>

    <body onload="currentYear()">
        <?php
            include("config.php");
            header("Content-type: text/html; charset=utf-8");
         ?>

        <main>
             <div class="container-fluid" id="adminWrapper">
                 <h1>Meal Team Airsoft - Adminisztrátor felület</h1>

                 <div class="row">

                     <div class="col-xs-12 col-sm-12 col-m-d-6 col-lg-6">
                         <h2>Új bejegyzés</h2>
                         <form>

                             <div class="form-group">
                                 <label for="input-title">Bejegyzés címe</label>
                                 <textarea class="form-control" rows="1" id="input-title"></textarea>
                             </div>

                             <div class="form-group">
                                 <label for="input-post">Bejegyzés szövege</label>
                                 <textarea class="form-control" rows="16" id="input-post"></textarea>
                             </div>

                             <div class="form-group">
                                 <label for="input-email">E-mail</label>
                                 <input type="email" class="form-control" id="input-email" placeholder="ide kéne írni egy admin e-mail címét">
                             </div>

                             <div class="form-group">
                                 <label for="input-password">Jelszó</label>
                                 <input type="password" class="form-control" id="input-password" placeholder="csillagcsillagcsillagcsillag">
                             </div>

                             <div class="checkbox">
                                 <label><input type="checkbox">Akarod te ezt a bejegyzést?</label>
                             </div>

                             <button type="submit" class="btn btn-default">Közzététel</button>

                         </form>

                     </div>

                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                         <h2>Bejegyzések</h2>
                         <?php
                             header("Content-type: text/html; charset=utf-8");

                             $sql = 'SELECT * FROM posts';
                             mysqli_set_charset($connection,"utf8");
                             $query = mysqli_query($connection, $sql);

                             echo '<table class="table table-striped">';
                             echo '<tr><td>Bejegyzés címe </td></td>Szerző </td></td>Közzététel ideje</td></tr>';
                             while ($row = mysqli_fetch_array($query))
                             {
                                 echo '<tr><td>' . $row['title'] . ' </td><td>' . $row['user'] . ' </td><td>' . $row['date'] . '</td></tr>';
                             }
                             echo "</table>";

                             mysqli_close($connection);
                         ?>
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
