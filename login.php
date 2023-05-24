<?php
session_start();
require('includes/dbconnection.php');
<<<<<<< HEAD
require('includes/security.php');
=======
>>>>>>> 09d0a23 (Initial commit)

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
<<<<<<< HEAD
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

=======

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1PYEBLTVME"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1PYEBLTVME');
</script>

  <title>Study Buddy - Login</title>
  <link rel="stylesheet" type="text/css" href="CSS/styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main>
      <div class="container">
        <div class="card">
          <img src="images/login.jpg" alt="Login">
          </div>
          <h2>Login</h2>
          <p>Access all the features of Study Buddy by logging into your account. Don't have an account? Register now!</p>
        <form action="login.php" method="post">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
          <input type="submit" value="Login">
        </form>
      </div>
    </main>
    
    <?php include 'footer.php'; ?>
  </body>
</html>
>>>>>>> 09d0a23 (Initial commit)
