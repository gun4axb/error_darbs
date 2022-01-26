<?php

    $conn = mysqli_connect("localhost", "root", "", "projekts1");
    mysqli_set_charset($conn, "utf8");

    if(mysqli_connect_error()) {
        echo "Failed to connect to MySQL: ". mysqli_connect_error();
        exit();
    }

?>