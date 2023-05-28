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
    $note = $_POST['note'];
    $user_id = $_SESSION['ID']; // Assuming 'ID' is the session variable holding the user's ID

    $sql = "INSERT INTO notes (user_id, content) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $user_id, $note); // Notice 'i' used for integer type user_id
    $stmt->execute();
    $stmt->close();

    $_SESSION['success'] = "Note saved successfully.";
    header('Location: viewnotes.php');
    exit();
}
?>

<?php
include 'header.php';
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
  <link rel="stylesheet" type="text/css" href="CSS/styles.css">
</head>
<body>
  <h1>Notes</h1>
  <form method="post" action="notes.php">
    <label>Notes:</label><br>
    <textarea name="note" rows="10" cols="50"></textarea><br>
    <input type="submit" value="Save">
  </form>
</body>
<?php
include 'footer.php';
?>
</html>

