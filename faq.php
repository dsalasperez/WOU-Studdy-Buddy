<<<<<<< HEAD
<?php
session_start();
require('includes/security.php');
?>

<html>
<head>
  <title>Study Buddy - FAQ</title>
</head>
<body>
  <h1>Study Buddy FAQ</h1>
  <p>Here are some frequently asked questions about Study Buddy:</p>
  <ul> 
    <li>Q: How do I create an account?</li>
    <ul>
      <li>A: Click the "Register" link at the top of the page and fill out the form.</li>
    </ul>
    <li>Q: How do I log in?</li>
    <ul>
      <li>A: Enter your username and password on the login page.</li>
    </ul>
    <li>Q: How do I take notes?</li>
    <ul>
      <li>A: Click the "My Notes" link on the welcome page to start taking notes.</li>
    </ul>
  </ul>
</body>
</html>
=======
<?php
session_start();
require('includes/security.php');
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
      <header>
        <h1>Study Buddy - FAQ</h1>
        <nav>
          <a href="contact.php">Contact Us</a>
          <a href="faq.php">FAQ</a>
          <a href="register.php">Register</a>
          <a href="login.php">Login</a>
        </nav>
      </header>
      <main>
        <div class="card">
          <img src="images/faq.jpg" alt="FAQ">
        </div>
        <section>
          <h2>Frequently Asked Questions</h2>
          <p>Here are some frequently asked questions about Study Buddy:</p>
          <ul>
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
            <li>
              <strong>Q: How do I take notes?</strong>
              <ul>
                <li>A: Click the "My Notes" link on the welcome page to start taking notes.</li>
              </ul>
            </li>
          </ul>
         </section>
      </main>
      <footer>
        <p>&copy; 2023 Study Buddy</p>
      </footer>
    </div>
  </body>
</html>

>>>>>>> 09d0a23 (Initial commit)
