<?php
session_start();
require('includes/security.php');
<<<<<<< HEAD
?> 
=======
require('includes/dbconnection.php');

if (isset($_GET['search'])) {
  $search = $_GET['search'];

  $sql = "SELECT * FROM users WHERE UserName LIKE ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", "%$search%");
  $stmt->execute();
  $result = $stmt->get_result();
}
?>

<?php include 'header.php'; ?>
>>>>>>> dev

<!DOCTYPE html>
<html>
  <head>
<<<<<<< HEAD
  
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1PYEBLTVME"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1PYEBLTVME');
</script>

=======
>>>>>>> dev
    <title>Study Buddy - Members</title>
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
  </head>
  <body>
<<<<<<< HEAD
    <div class="container">    
      <header>
         <h1>Welcome <?php echo $_SESSION['username']; ?> to Study Buddy!</h1>
        <nav>
          <a href="faq.php">FAQ</a>
          <a href="news.php">News</a>
          <a href="notes.php">Notes</a>
          <a href="logout.php">Logout</a>
        </nav>
      </header>
=======
    <h1>Members</h1>

    <form method="get" action="members.php">
      <label for="search">Search for members:</label>
      <input type="text" id="search" name="search" required>
      <input type="submit" value="Search">
    </form>

    <?php if (isset($result) && $result->num_rows > 0) : ?>
      <h2>Search Results:</h2>
      <?php while ($row = $result->fetch_assoc()) : ?>
        <?php $username = $row['UserName']; ?>
        <a href="profile.php?username=<?php echo urlencode($username); ?>"><?php echo $username; ?></a><br>
      <?php endwhile; ?>
    <?php else : ?>
      <p>No results found.</p>
    <?php endif; ?>

    <div class="container">
>>>>>>> dev
      <main>
        <div class="card">
          <img src="images/wou.jpg" alt="Image of Western Oregon University Front">
          <h2>Resources and News</h2>
<<<<<<< HEAD
          <p>There is many resources available for you.</p>
=======
          <p>There are many resources available for you.</p>
>>>>>>> dev
        </div>
        <div class="card">
          <img src="images/notes.jpg" alt="Image of notes">
          <h2>Access Study Notes</h2>
          <p>Access your <a href="notes.php">notes</a> and save them for later use.</p>
        </div>
        <div class="card">
<<<<<<< HEAD
          <img src="images/welcome.jpg" alt="Image of library books"> 
          
          <h2>Access or Create Study Groups!</h2>
          <p>Are you looking for a study group revelant to your classes or major? Would you like to create a study session with your friends or classmates?.</p>
          <p>If so click <a href="https://classroom.google.com/u/1/" target="_blank">to login to your Classroom</a>
        </div>
      </main>
      <footer>
        <p>&copy; 2023 Study Buddy</p>
      </footer>
    </div>
  </body>
</html>

=======
          <img src="images/welcome.jpg" alt="Image of library books">
          <h2>Access or Create Study Groups!</h2>
          <p>Are you looking for a study group relevant to your classes or major? Would you like to create a study session with your friends or classmates?</p>
          <p>If so, click <a href="https://classroom.google.com/u/1/" target="_blank">here to login to your Classroom</a>.</p>
        </div>
      </main>
    </div>

    <?php include 'footer.php'; ?>
  </body>
</html>
>>>>>>> dev
