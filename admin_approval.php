<?php
session_start();
require('includes/dbconnection.php');

// Check if the user is logged in and authorized as an admin
if (!isset($_SESSION['username']) || $_SESSION['Auth'] != 2) {
  header('Location: login.php');
  exit();
}

// Retrieve all pending admin registration requests
$sql = "SELECT * FROM admins WHERE Status = 'pending'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Approval</title>
  <link rel="stylesheet" type="text/css" href="CSS/styles.css">
</head>
<body>
  <?php include 'header.php'; ?>

  <main>
    <div class="container">
      <h2>Admin Approval</h2>

      <?php
      // Check if there are any pending requests
      if ($result->num_rows > 0) {
        // Display the pending admin registration requests
        while ($row = $result->fetch_assoc()) {
          echo "<div class='request'>";
          echo "<p>Username: " . $row['UserName'] . "</p>";
          echo "<p>Email: " . $row['EMail'] . "</p>";
          echo "<p>Registration Date: " . $row['RegistrationDate'] . "</p>";
          echo "<div class='actions'>";
          echo "<a href='approve_admin.php?id=" . $row['ID'] . "'>Approve</a>";
          echo "<a href='deny_admin.php?id=" . $row['ID'] . "'>Deny</a>";
          echo "</div>";
          echo "</div>";
        }
      } else {
        echo "<p>No pending admin registration requests.</p>";
      }
      ?>

    </div>
  </main>

  <?php include 'footer.php'; ?>
</body>
</html>

