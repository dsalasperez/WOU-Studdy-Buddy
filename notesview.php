<?php
session_start();
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
  
  $stmt = $pdo->prepare("SELECT content, created_at FROM notes WHERE user_id = ? ORDER BY created_at DESC");
  $stmt->execute([$user_id]);
  $notes = $stmt->fetchAll();
  
  foreach ($notes as $note) {
    echo "<p>{$note['content']} (created at {$note['created_at']})</p>";
  }
}
