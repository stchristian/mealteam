<?php
    include("config.php");
    header("Content-type: text/html; charset=utf-8");

    //Input variables
    $id;
    $user;

    //Validiation
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["input-id"])) {
            echo "Azonosító nélkül semmit nem fogsz kitörölni!";
        } else {
            $id = $_POST["input-id"];
            if (empty($_POST["input-user"])) {
                echo "Csak van valami neved, nem?";
            } else {
                $user = $_POST["input-user"];
                //Delete post by $id
                $sql = "DELETE FROM posts WHERE id = '$id'";

                if (mysqli_query($connection, $sql)) {
                    echo "A bejegyzés törlése sikeres. 🔫";
                } else {
                    echo "Hiba: " . $sql . "<br>" . mysqli_error($connection);
                }
            }
        }
    }

    //Close database connection
    mysqli_close($connection);
 ?>
