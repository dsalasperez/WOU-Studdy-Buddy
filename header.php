<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Buddy</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">    
      <header>
        <h1>Study Buddy</h1>
        <nav>
          <?php
            if ($authenticated) {
          ?>
            <a href="news.php">News</a>
            <a href="notes.php">Notes</a>
            <a href="logout.php">Logout</a>
          <?php
            } else {
          ?>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <a href="contactus.php">Contact Us</a>
            <a href="faq.php">FAQ</a>
          <?php
            }
          ?>
        </nav>
      </header>

