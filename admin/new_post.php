<?php
    include("config.php");
    header("Content-type: text/html; charset=utf-8");

    //input variables
    $title;
    $post;
    $user;

    //validiation
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["input-title"])) {
            echo "Egy címet, légyszíves!";
        } else {
            $title = $_POST["input-title"];
            if (empty($_POST["input-post"])) {
                echo "Nem akarsz bejegyzést írni?";
            } else {
                $post = $_POST["input-post"];
                if (empty($_POST["input-user"])) {
                    echo "Csak van valami neved, nem?";
                } else {
                    $user = $_POST["input-user"];
                    //insert into database
                    $sql = "INSERT INTO posts (title, post, user) VALUES('$title', '$post', '$user')";
                    if (mysqli_query($connection, $sql)) {
                        echo "A bejegyzés közzététele sikeres. 🔫";
                    } else {
                        echo "Hiba: " . $sql . "<br>" . mysqli_error($connection);
                    }
                }
            }
        }
    }

    //close connection
    mysqli_close($connection);
 ?>
