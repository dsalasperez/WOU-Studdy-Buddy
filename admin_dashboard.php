<?php
session_start();

// Check if the user is an admin (Auth = 2)
if (!isset($_SESSION['Auth']) || $_SESSION['Auth'] != 2) {
  header('Location: login.php');
  exit();
}

?>

<html>
<head>
  <title>Admin Dashboard</title>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1PYEBLTVME"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-1PYEBLTVME');
    </script>

</head>
<body>
  <!-- Add your admin dashboard content here -->
  <h1>Welcome to the Admin Dashboard</h1>
  <p>This is the admin-only area where you can perform administrative tasks.</p>
  <!-- Include any additional functionality specific to admins -->
</body>
</html>
