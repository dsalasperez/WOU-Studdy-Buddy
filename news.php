<?php
<<<<<<< HEAD
session_start();
require('includes/security.php');
=======
include 'security.php';
include 'header.php';
>>>>>>> 09d0a23 (Initial commit)
?>

<html>
<head>
<<<<<<< HEAD
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

=======
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1PYEBLTVME"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1PYEBLTVME');
</script>
    <title>Study Buddy - News</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
</head>

<body>
    <div class="container">    
      <main>
        <div class="card">
          <img src="images/google-study-tools.jpg" alt="Google Study Tools">
          <h2>Google Study Tools</h2>
          <p>Google offers a variety of study tools to help students, including Google Docs, Google Sheets, and Google Slides. They're all free to use and can be accessed from any device with an internet connection.</p>
        </div>
        <div class="card">
          <img src="images/free-cloud-storage.jpg" alt="Free Cloud Storage">
          <h2>Free Cloud Storage</h2>
          <p>Many cloud storage providers offer free storage plans that can be used to back up and access files from anywhere. These can be especially helpful for students, who often need to save and share large files for their assignments.</p>
        </div>
      </main>
      <footer>
        <p>&copy; 2023 Study Buddy</p>
      </footer>
    </div>
  </body>
</html>
<?php
include 'footer.php';
?>
>>>>>>> 09d0a23 (Initial commit)
