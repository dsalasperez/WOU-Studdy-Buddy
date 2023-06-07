<?php
session_start();
require('includes/security.php');
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
    
    <title>Study Buddy - FAQ</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
  </head>
  <body>
    <div class="container">
      <main>
        <div class="card">
          <img src="images/faq.jpg" alt="FAQ">
        </div>
        <section>
          <h2>Frequently Asked Questions</h2>
          <p>Here are some frequently asked questions about Study Buddy:</p>
          <ul>
            <?php
              if (!isset($_SESSION['Auth']) || $_SESSION['Auth'] < 1) {
            ?>
                <!-- Content for non-authenticated users -->
                <li>
                  <strong>Q: How do I create an account?</strong>
                  <ul>
                    <li>A: Click the "Register" link at the top of the page and fill out the form.</li>
                  </ul>
                </li>
                <li>
                  <strong>Q: How do I log in?</strong>
                  <ul>
                    <li>A: Enter your username and password on the login page.</li>
                  </ul>
                </li>
            <?php
              } else {
            ?>
                <!-- Content for authenticated users -->
                <li>
                  <strong>Q: How do I take notes?</strong>
                  <ul>
                    <li>A: Click the "My Notes" link on the welcome page to start taking notes.</li>
                  </ul>
                </li>
            <?php
              }
            ?>
          </ul>
         </section>
      </main>
<?php
include 'footer.php';
?>
    </div>
  </body>
</html>
