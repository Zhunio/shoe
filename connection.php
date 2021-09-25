<?php

function openConnection() {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "shoe_store";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}
