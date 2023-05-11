<?php
session_start();
require('includes/dbconnection.php');
require('includes/security.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE UserName = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['Password'])) {
      $_SESSION['username'] = $username;
      $_SESSION['Auth'] = $user['Auth'];

      header('Location: members.php');
      exit();
    } else {
      $error = "Invalid username or password";
    }
  } else {
    $error = "Invalid username or password";
  }

  $stmt->close();
}
?>

<html>
<head>
  <title>Study Buddy - Login</title>
</head>
<body>
  <h1>Login to Study Buddy</h1>
  <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
  <form method="post" action="login.php">
    <label>Username:</label>
    <input type="text" name="username" required><br>

    <label>Password:</label>
    <input type="password" name="password" required><br>

    <input type="submit" value="Login">
  </form>
</body>
</html>

