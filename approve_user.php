<?php
session_start();
require('includes/dbconnection.php');

// Check if the admin is authenticated, otherwise redirect to the login page
if (!isset($_SESSION['admin_username'])) {
  header('Location: admin-login.php');
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
  $userID = $_GET['id'];

  // Update the user's Auth column to indicate admin status
  $sql = "UPDATE users SET Auth = 2 WHERE ID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $userID);
  $stmt->execute();
  $stmt->close();

  // Fetch the admin's details from the users table
  $adminDetails = fetchAdminDetails($userID);

  if ($adminDetails) {
    // Insert the admin details into the admins table
    insertAdminIntoTable($adminDetails);

    // Send a notification email to the admin
    sendNotificationEmail($adminDetails['UserName'], $adminDetails['EMail']);
  }
}

// Function to fetch the admin's details from the users table
function fetchAdminDetails($userID) {
  global $conn;

  $sql = "SELECT * FROM users WHERE ID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $userID);
  $stmt->execute();
  $result = $stmt->get_result();
  $stmt->close();

  if ($result->num_rows == 1) {
    return $result->fetch_assoc();
  } else {
    return null;
  }
}

// Function to insert the admin into the admins table
function insertAdminIntoTable($adminDetails) {
  global $conn;

  $username = $adminDetails['UserName'];
  $password = $adminDetails['Password'];
  $email = $adminDetails['EMail'];

  $sql = "INSERT INTO admins (UserName, Password, EMail) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $username, $password, $email);
  $stmt->execute();
  $stmt->close();
}

// Function to send a notification email to the admin
function sendNotificationEmail($username, $email) {
  $to = 'support@39796811.hubspot-inbox.com';
  $subject = "New Admin Registration";
  $message = "A new admin registration has been approved.\n\n";
  $message .= "Username: $username\n";
  $message .= "Email: $email\n";

  // Set the email headers
  $headers = "From: wousb admin from wousb.app <support@39796811.hubspot-inbox.com>\r\n";
  $headers .= "Reply-To: wousb admin from wousb.app <support@39796811.hubspot-inbox.com>\r\n";

  // Use PHP's mail() function or a third-party library to send the email
  mail($to, $subject, $message, $headers);

  // After sending the notification email, redirect to the admin approval page
  header('Location: admin_approval.php');
  exit();
}
?>

