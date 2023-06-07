<?php
session_start();
require('includes/dbconnection.php');

// Check if the user is logged in and authorized as an admin
if (!isset($_SESSION['username']) || $_SESSION['Auth'] != 2) {
  header('Location: login.php');
  exit();
}

// Check if the request has a valid user ID parameter
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
  $adminID = $_GET['id'];

  // Update the admin's status to "approved" in the admins table
  $sql = "UPDATE admins SET Status = 'approved' WHERE ID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $adminID);
  $stmt->execute();
  $stmt->close();

  // Redirect back to the admin approval page
  header('Location: admin_approval.php');
  exit();
} else {
  header('Location: error.php');
  exit();
}
?>
