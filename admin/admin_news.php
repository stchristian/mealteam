<?php
   header("Content-type: text/html; charset=utf-8");
   include("config.php");

   $sql = 'SELECT * FROM posts';
   mysqli_set_charset($connection,"utf8");
   $query = mysqli_query($connection, $sql);

   echo '<table class="table table-striped">';
   echo '<tr><th>Cím</th><th>Felhasználónév</th><th>Közzététel dátuma</th><th>Bejegyzés azonosítója (ID)</th></tr>';
   while ($row = mysqli_fetch_array($query))
   {
       echo '<tr><td>' . $row['title'] . ' </td><td>' . $row['user'] . ' </td><td>' . $row['date'] . "</td><td>" . $row['id'] . '</td></tr>';
   }
   echo "</table>";

   mysqli_close($connection);
?>
