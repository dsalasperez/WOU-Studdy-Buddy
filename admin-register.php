<?php
session_start();
require('includes/dbconnection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  // Perform any necessary validation and sanitation of form data

  // Check if the username is already taken
  $sql = "SELECT * FROM users WHERE UserName = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 0) {
    // Insert the admin registration into the users table
    $sql = "INSERT INTO users (UserName, Password, EMail, Auth) VALUES (?, ?, ?, 2)";
    $stmt = $conn->prepare($sql);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt->bind_param("sss", $username, $hashedPassword, $email);
    $stmt->execute();
    $stmt->close();

    // Send an approval notification to the admin email address
    sendApprovalNotification($username, $email);

    // Redirect the admin to a success page or show a success message
    header('Location: admin_registration_success.php');
    exit();
  } else {
    $error = "Username already taken. Please choose a different username.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Registration</title>
  <link rel="stylesheet" type="text/css" href="CSS/styles.css">
</head>
<body>
  <?php include 'header.php'; ?>

  <main>
    <div class="container">
      <h2>Admin Registration</h2>
      <form action="admin-register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="Register">
      </form>
    </div>
  </main>

  <?php include 'footer.php'; ?>
</body>
</html>

