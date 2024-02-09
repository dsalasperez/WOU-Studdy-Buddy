<?php

# To improve security include credential information using environment variables
$servername = "localhost";
$username = "dev";
$password = "yUyUq@rU9iwuXi59_RIC";
$dbname = "wousb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
