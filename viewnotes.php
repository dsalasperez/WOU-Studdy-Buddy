<?php
session_start();
require('includes/dbconnection.php');
require('includes/security.php');

// check if user is authenticated
if (!isset($_SESSION['Auth']) || $_SESSION['Auth'] < 1) {
  header('Location: login.php');
  exit();
}

$user_id = $_SESSION['ID']; // Assuming 'ID' is the session variable holding the user's ID

$sql = "SELECT content, created_at FROM notes WHERE user_id = ? ORDER BY created_at DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id); // Notice 'i' used for integer type user_id
$stmt->execute();
$result = $stmt->get_result();
?>

<?php
include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Study Buddy - Home</title>
  <link rel="stylesheet" type="text/css" href="CSS/styles.css">
</head>
<body>
  <h1>Your saved notes:</h1>
  <?php
    while($row = $result->fetch_assoc()) {
      echo "<p>{$row['content']} (created at {$row['created_at']})</p>";
    }
  ?>
</body>
</html>

<?php
include 'footer.php';
?>
