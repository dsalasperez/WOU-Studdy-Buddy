<?php
ob_start();
session_start();
ini_set('display_errors', 1);

require ('includes/dbconnection.php');

// Check if the user submitted both the username and password
if (empty($_POST['username']) || empty($_POST['password'])) {
    header('Location: login.php');
    exit();
}

// Retrieve the user record from the database
$sql = "SELECT * FROM users WHERE UserName = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_POST['username']);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();

// Check if the user exists and if the password matches
if (!$user || !password_verify($_POST['password'], $user['Password'])) {
    header('Location: login.php');
    exit();
}

// Set session variables and redirect to authenticated.php
$_SESSION['Auth'] = $user['Auth'];
$_SESSION['username'] = $user['UserName'];
header('Location: authenticated.php');
exit();

$conn->close();
ob_end_flush();
?>
