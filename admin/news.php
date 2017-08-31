<?php
    include("config.php");

    $sql = 'SELECT * FROM posts';
    mysqli_set_charset($connection,"utf8");
    $query = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($query))
    {
        echo '<div><h2>' . $row['title'] . '<br><small>' . $row['date'] . ' | ' . $row['user'] . '</small></h2><article>' . $row["post"] . '<article></div>';
    }

    mysqli_close($connection);
 ?>
