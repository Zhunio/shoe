<?php

function openConnection() {
    $dbhost = "localhost";
    $dbusername = "root1";
    $dbpassword = "";
    $database = "shoe_store";

    $conn = new mysqli($dbhost, $dbusername, $dbpassword, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

?>
