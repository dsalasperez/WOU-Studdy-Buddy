<?php
session_start();
require('includes/dbconnection.php');
require('includes/security.php');

// check if user is authenticated
if (!isset($_SESSION['Auth']) || $_SESSION['Auth'] < 1) {
  header('Location: login.php');
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $notes = $_POST['notes'];
  $username = $_SESSION['username'];

  $sql = "UPDATE users SET notes = ? WHERE UserName = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $notes, $username);
  $stmt->execute();
  $stmt->close();

  $_SESSION['success'] = "Notes saved successfully.";
  header('Location: viewnotes.php');
  exit();
}

$username = $_SESSION['username'];

?>

<html>
<head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1PYEBLTVME"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1PYEBLTVME');
</script>

  <title>Study Buddy - Notes</title>
</head>
<body>
  <h1>Notes</h1>
  <?php if (isset($_SESSION['error'])) { echo "<p style='color:red'>".$_SESSION['error']."</p>"; unset($_SESSION['error']); } ?>
  <form method="post" action="">
    <label>Notes:</label><br>
    <textarea name="notes" rows="10" cols="50"></textarea><br>
    <input type="submit" value="Save">
  </form>
</body>
</html>

