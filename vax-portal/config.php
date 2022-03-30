<?php

// CONNECTING TO THE MYSQL DATABASE

// DEFINING THE DB CONNECTION VARIABLES FOR THE QUERY STRING
$server = "localhost";
$username = "root";
$password = "";
$dbName = "covaxpass_db";

// EXECUTING THE QUERY AND CONNECTING TO THE MYSQL DATABASE
$conn = mysqli_connect($server, $username, $password, $dbName);

// CHECKING IF THE CONNECTION IS SUCCESSFUL
if(mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
 } else {
    // echo "Successfully connected to MySQL";
 }


