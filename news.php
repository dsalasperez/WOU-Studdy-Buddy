<?php
session_start();
require('includes/security.php');
?>

<html>
<head>
  <title>Study Buddy - News</title>
</head>
<body>
  <?php if(isset($_SESSION['Auth']) && $_SESSION['Auth'] >= 1) { ?>
    <div style="float: right;">
      <a href="logout.php">Logout</a>
    </div>
  <?php } ?>
  <h1>Study Buddy News</h1>
  <p>Study Buddy: The Ultimate Virtual Meeting Companion</p>
  <p>As more and more meetings are conducted virtually, it can be a challenge to keep track of all the notes and links associated with each session. That's where Study Buddy comes in - the ultimate virtual meeting companion!</p>
  <p>With Study Buddy, you can easily organize all your meeting notes and links in one place, and access them from anywhere with an internet connection. Whether you're using Google Meetings, Zoom, or Microsoft Teams, Study Buddy has you covered.</p>
  <p>Not only that, but Study Buddy also makes it easy to share notes and links with others in your meeting. Simply invite them to join your Study Buddy workspace, and they'll have instant access to all the important information.</p>
  <p>Say goodbye to messy notes and lost links - with Study Buddy, you'll never miss an important detail again. Try it out today and see the difference for yourself!</p>
  
  <?php if(isset($_SESSION['Auth']) && $_SESSION['Auth'] >= 1) { ?>
  <a href="notes.php">Take Notes</a>
  <?php } ?>
</body>
</html>

