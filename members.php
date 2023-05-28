<?php
session_start();
require('includes/security.php');
?>
<?php
include 'header.php';
?>
<!DOCTYPE html>
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

    <title>Study Buddy - Members</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
  </head>
  <body>
    <div class="container">    
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
          <p>If so click <a href="https://classroom.google.com/u/1/" target="_blank">to login to your Classroom</a>
        </div>
      </main>
<?php
include 'footer.php';
?>
    </div>
  </body>
</html>

