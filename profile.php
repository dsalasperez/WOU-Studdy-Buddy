<?php
session_start();
require('includes/security.php');
require('includes/dbconnection.php');

if (!isset($_SESSION['Auth']) || $_SESSION['Auth'] < 1) {
  header('Location: login.php');
  exit();
}

if (!isset($_GET['username'])) {
  echo "Invalid request: No username provided.";
  exit();
}

$username = $_GET['username'];

$sql = "SELECT * FROM users WHERE UserName = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows != 1) {
  echo "User not found.";
  exit();
}

$user = $result->fetch_assoc();
$userID = $user['ID'];
$email = $user['Email'];

echo "Debug Output:<br>";
echo "Username: $username<br>";
echo "User ID: $userID<br>";
echo "Email: $email<br>";

include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Study Buddy - Profile</title>
  <link rel="stylesheet" type="text/css" href="CSS/styles.css">
</head>
<body>
  <h1>Profile: <?php echo $username; ?></h1>
  <p>User ID: <?php echo $userID; ?></p>
  <p>Email: <?php echo $email; ?></p>
</body>
</html>

<?php include 'footer.php'; ?>
