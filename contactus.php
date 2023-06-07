<<<<<<< HEAD
=======
<?php
session_start();
require('includes/security.php');
?>
<?php
include 'header.php';
?>

>>>>>>> dev
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

    <title>Study Buddy - Contact Us</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
  </head>
  
  <body>
    <div class="container">
<<<<<<< HEAD
      <header>
        <h1>Study Buddy</h1>
        <nav>
          <a href="index.php">Home</a>
          <a href="faq.php">FAQ</a>
          <a href="register.php">Register</a>
          <a href="login.php">Login</a>
        </nav>
      </header>
      <main>
        <div class="card img"">
          <img src="images/contactus.jpg" alt="Contact Us Banner">
          <h2>We'd Love to Hear From You!</h2>
        </div>
          <h2>Whether you have a question about features, trials, pricing, need a demo, or anything else, our team is ready to answer all your questions.</h2>

=======
      <main>
        <div class="card img">
        <?php if($authenticated) { ?>
            <img src="images/member_contact.jpg" alt="Contact Us Banner">
            <h2>Dear member, we're here to help you!</h2>
        <?php } else { ?>
            <img src="images/contactus.jpg" alt="Contact Us Banner">
            <h2>We'd Love to Hear From You!</h2>
        <?php } ?>
        </div>
        <?php if($authenticated) { ?>
            <h2>Got a question about a feature or need help with something? Our team is ready to assist you.</h2>
        <?php } else { ?>
            <h2>Whether you have a question about features, need a demo, or have a feedback, our team is ready to answer all your questions.</h2>
        <?php } ?>
>>>>>>> dev
        <div class="card">
          <img src="images/email.jpg" alt="Email">
          <h2>Email Us</h2>
          <p>Send us an email at <a href="mailto:info@studybuddy.com">info@studybuddy.com</a> and we'll get back to you as soon as we can.</p>
        </div>
        <div class="card">
          <img src="images/phone.jpg" alt="Phone">
          <h2>Call Us</h2>
          <p>Want to talk to a real person? Call us at (123) 456-7890, we're available Mon-Fri, 9am - 5pm.</p>
        </div>        
        <div class="card">
          <img src="images/mail.jpg" alt="Mail">
          <h2>Mail Us</h2>
          <p>Prefer snail mail? Send your letters to: Study Buddy Inc., 123 Street Name, City, State, 12345</p>
        </div>
      </main>
<<<<<<< HEAD
      <footer>
        <p>&copy; 2023 Study Buddy</p>
      </footer>
=======
>>>>>>> dev
    </div>
 <!-- HubSpot Form Embed Code -->
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
    <script>
      hbspt.forms.create({
        region: "na1",
        portalId: "39796811",
        formId: "694c2a72-9dbe-4e9c-a622-b042bf1c7388"
      });
    </script>
    
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/39796811.js"></script>
    <!-- End of HubSpot Embed Code -->
<<<<<<< HEAD
=======
<?php
include 'footer.php';
?>
>>>>>>> dev
  </body>
</html>

