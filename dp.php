<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "medirent";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed");
}

$conn->set_charset("utf8mb4");
?>
