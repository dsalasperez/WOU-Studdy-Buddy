<?php
session_start();
$authenticated = isset($_SESSION['Auth']) && $_SESSION['Auth'] >= 1;
$username = $authenticated ? $_SESSION['username'] : '';
$display_as_row = true; // change this to false to display as a list
$link_class = $display_as_row ? 'links-row' : 'links-list';
?>
