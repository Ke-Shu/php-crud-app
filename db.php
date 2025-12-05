<?php

$host = "sql100.infinityfree.com";
$user = "iF0_40602448";
$pass = "pheonixK1ng" your infinityFree password
$db   = "iF0_40602448_crud_app";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
