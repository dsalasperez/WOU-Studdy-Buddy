<?php
session_start();
require('includes/dbconnection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  // Check if the user is registering as an admin or a member
  $userType = ($_POST['user_type'] == 'admin') ? 'admins' : 'users';

  // Insert the user into the respective table (admins or users)
  $sql = "INSERT INTO $userType (UserName, Password, EMail) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $username, $password, $email);
  $stmt->execute();
  $stmt->close();

  // After registering, redirect to the admin approval page
  header('Location: admin_approval.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Study Buddy - Register</title>
  <link rel="stylesheet" type="text/css" href="CSS/styles.css">
</head>
<body>
<?php include 'header.php'; ?>

<main>
  <div class="container">
    <h2>Register</h2>
    <p>Create a new account:</p>
    <form action="register.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="user_type">Register as:</label>
      <select id="user_type" name="user_type">
        <option value="member">Member</option>
        <option value="admin">Admin</option>
      </select>
      <input type="submit" value="Register">
    </form>
  </div>
</main>

<?php include 'footer.php'; ?>
</body>
</html>

