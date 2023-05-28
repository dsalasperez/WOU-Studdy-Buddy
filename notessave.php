<?php
session_start();
if (isset($_SESSION['user_id'], $_POST['note'])) {
  $user_id = $_SESSION['user_id'];
  $note = $_POST['note'];
  
  // Here, $pdo represents a PDO connection to your MySQL database.
  $stmt = $pdo->prepare("INSERT INTO notes (user_id, content) VALUES (?, ?)");
  $stmt->execute([$user_id, $note]);
  
  header("Location: notesview.php");
  exit();
}
