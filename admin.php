<?php
session_start();

if (!isset($_SESSION['Auth']) || $_SESSION['Auth'] != 2) {
    header('Location: login.php');
    exit();
}

// Include the necessary files and perform any additional setup

// Display the admin page content
?>

<html>
<head>
  <title>Admin Page</title>
  <!-- Include any CSS or JavaScript files -->
</head>
<body>
  <!-- Add your admin page content here -->
  <h1>Welcome to the Admin Page</h1>
  <p>This is the admin-only area where you can manage the website and perform administrative tasks.</p>
</body>
</html>
