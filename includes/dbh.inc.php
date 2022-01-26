<?php

    $serverName = "localhost";
    $dBUserName = "root";
    $dBPassword = "";
    $dBName = "phpproject01";

    $conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

    if (!$conn){
        die("Connection Failed: ". mysqli_connect_error());
    }

?>