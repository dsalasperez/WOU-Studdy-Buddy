<?php
session_start();
require('includes/dbconnection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $email = $_POST['email'];
  $sql = "INSERT INTO users (UserName, Password, EMail, Auth) VALUES (?, ?, ?, 1)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $username, $password, $email);
  $stmt->execute();
  $stmt->close();

  header('Location: login.php');
  exit();
}
?>

<html>
  <head>
    <title>Study Buddy - Register</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <header>
      <h1>Study Buddy</h1>
      <nav>
        <ul>
          <li><a href="faq.php">FAQ</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <h2>Register for Study Buddy</h2>
      <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>

        <input type="submit" value="Register">
      </form>
    </main>
    <footer>
      <p>&copy; 2021 Study Buddy</p>
    </footer>
  </body>
</html>

