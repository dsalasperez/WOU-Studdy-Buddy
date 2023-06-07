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
        $nav_links = array(
          'Home' => 'index.php',
          'Login' => 'login.php',
          'Register (Admin)' => 'admin-register.php',
          'Register (Member)' => 'register.php',
          'FAQ' => 'faq.php',
          'Contact Us' => 'contactus.php'
        );

          if ($authenticated) {
            $username = $_SESSION['username'];

            if ($_SESSION['Auth'] == 2) {
              $nav_links += array(
                'Admin Dashboard' => 'admin_dashboard.php',
                'Logout' => 'logout.php'
              );
            } else {
              $nav_links += array(
                'Members Home' => 'members.php',
                'News' => 'news.php',
                'Notes' => 'notes.php',
                'View Notes' => 'viewnotes.php',
                'Logout' => 'logout.php'
              );
            }
          }

          foreach ($nav_links as $name => $url) {
            echo "<a href='$url'>$name</a>";
          }
      ?>
    </nav>
  </header>
</div>
</body>
</html>

