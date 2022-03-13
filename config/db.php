<?php

    // CONNECTING TO THE MYSQL DATABASE

    // DEFINING THE DB CONNECTION VARIABLES
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbName = "covaxpass_db";

    // CONNECTING TO THE MYSQL DATABASE
    $conn = mysqli_connect($server, $username, $password, $dbName);

    // CHECKING THE CONNECTION
    if(mysqli_connect_error()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
     } else {
        // echo "Successfully connected to MySQL";
     }

?>



