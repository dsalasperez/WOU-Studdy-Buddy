<?php
session_start();
require('includes/dbconnection.php');
require('includes/security.php');

// check if user is authenticated
if (!isset($_SESSION['Auth']) || $_SESSION['Auth'] < 1) {
  header('Location: login.php');
  exit();
}

$username = $_SESSION['username'];

// retrieve notes from database
$sql = "SELECT notes FROM users WHERE UserName = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$notes = $row['notes'];

// display notes to user
echo "<h1>Your saved notes:</h1>";
echo "<p>$notes</p>";
?>

