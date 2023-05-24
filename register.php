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

<!DOCTYPE html>
<html>
  <head>
    <title>Study Buddy - Register</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
  </head>
  <body>
    <div class="container">
      <header>
        <h1>Study Buddy</h1>
        <nav>
          <a href="index.php">Home</a>
          <a href="faq.php">FAQ</a>
          <a href="register.php">Register</a>
          <a href="login.php">Login</a>
        </nav>
      </header>
      <main>
        <div class="hero-image">
          <img src="images/register.jpg" alt="Register Banner">
        </div>
        <section class="registration-form">
          <h2>Join Study Buddy Today!</h2>
          <p>Get access to a world of knowledge and meet your perfect study partner.</p>
          <form action="register.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <br>
            <button type="submit">Join Now</button>
          </form>
        </section>
      </main>
      <footer>
        <p>&copy; 2023 Study Buddy</p>
      </footer>
    </div>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/39796811.js"></script>
    <!-- End of HubSpot Embed Code -->
  </body>
</html>

