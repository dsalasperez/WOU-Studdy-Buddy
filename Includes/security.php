<?php
session_start();
$authenticated = isset($_SESSION['Auth']) && $_SESSION['Auth'] >= 1;
$username = $authenticated ? $_SESSION['username'] : '';
$display_as_row = true; // change this to false to display as a list
$link_class = $display_as_row ? 'links-row' : 'links-list';
?>

<div class="header">
    <?php if ($authenticated) { ?>
        <div class="<?php echo $link_class; ?>">
            <a href="news.php">News</a>
            <a href="notes.php">Notes</a>
            <a href="logout.php">Logout</a>
            <?php if ($display_as_row) { ?>
                <p class="welcome-message">Hi <?php echo $username; ?>, welcome to Study Buddy!</p>
            <?php } ?>
        </div>
    <?php } else { ?>
        <ul class="<?php echo $link_class; ?>">
            <li><a href="public.php">Public Page</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    <?php } ?>
</div>


