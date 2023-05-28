<?php
session_start();
require('includes/security.php');
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
    </div>
  </body>
</html>
<?php
include 'footer.php';
?>
