<?php
session_start();
<<<<<<< HEAD
$authenticated = isset($_SESSION['Auth']) && $_SESSION['Auth'] >= 1;
$username = $authenticated ? $_SESSION['username'] : '';
$display_as_row = true; // change this to false to display as a list
$link_class = $display_as_row ? 'links-row' : 'links-list';
?>
=======

// Check if the user is authenticated as a member or admin
$member_authenticated = isset($_SESSION['Auth']) && $_SESSION['Auth'] == 1;
$admin_authenticated = isset($_SESSION['Auth']) && $_SESSION['Auth'] == 2;

// Set the username variable based on authentication status
$username = '';
if ($member_authenticated || $admin_authenticated) {
    $username = $_SESSION['username'];
}

// Set the display mode for links
$display_as_row = true; // change this to false to display as a list
$link_class = $display_as_row ? 'links-row' : 'links-list';
?>

>>>>>>> dev
