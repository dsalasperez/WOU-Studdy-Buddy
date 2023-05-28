<!DOCTYPE html>
<html l<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Study Buddy</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">    
      <header>
          <?php
              // Links for everyone
              $nav_links = [
                  'FAQ' => 'faq.php',
                  'Contact Us' => 'contactus.php'
              ];

              // If user is authenticated, add more links
              if ($authenticated) {
                  $nav_links += [
                      'News' => 'news.php',
                      'Notes' => 'notes.php',
                      'View Notes' => 'viewnotes.php',
                      'Logout' => 'logout.php',
                  ];
              } else {
                  $nav_links += [
                      'Login' => 'login.php',
                      'Register' => 'register.php',
                  ];
              }

              // Render the navigation
              echo "<nav>";
              foreach ($nav_links as $name => $url) {
                  echo "<a href='$url'>$name</a>";
              }
              echo "</nav>";
              
              // If authenticated, render welcome message
              if ($authenticated && isset($_SESSION['username'])) {
                  echo "<h2>Welcome " . $_SESSION['username'] . " to Study Buddy!</h2>";
              }
          ?>
      </header>

  </body>
</html>
