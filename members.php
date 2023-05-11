<?php
session_start();
require('includes/security.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Study Buddy - Members</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
  </head>
  <body>
    <div class="container">    
      <header>
         <h1>Welcome <?php echo $_SESSION['username']; ?> to Study Buddy!</h1>
        <nav>
          <a href="faq.php">FAQ</a>
        </nav>
      </header>
      <main>
        <div class="card">
          <img src="images/wou.jpg" alt="Image of Western Oregon University Front">
          <h2>Resources and News</h2>
          <p>There is many resources available for you.</p>
        </div>
        <div class="card">
          <img src="images/notes.jpg" alt="Image of notes">
          <h2>Access Study Notes</h2>
          <p>Access your <a href="notes.php">notes</a> and save them for later use.</p>
        </div>
        <div class="card">
          <img src="images/welcome.jpg" alt="Image of library books">
          <h2>Access or Create Study Groups!</h2>
          <p>Are you looking for a study group revelant to your classes or major? Would you like to create a study session with your friends or classmates?.</p>
        </div>
      </main>
      <footer>
        <p>&copy; 2023 Study Buddy</p>
      </footer>
    </div>
  </body>
</html>

