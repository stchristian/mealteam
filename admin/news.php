<?php
    include("config.php");

    $sql = 'SELECT * FROM posts';
    mysqli_set_charset($connection,"utf8");
    $query = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($query))
    {
        echo '<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4"><article><h3>' . $row['title'] . '<br><small>' . $row['date'] . ' | ' . $row['user'] . '</small></h3>' . $row["post"] . '</article></div>';
    }

    mysqli_close($connection);
 ?>
