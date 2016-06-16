<?php include 'header.php';

// remove all session variables
session_unset();

// destroy the session
session_destroy(); 

echo 'You are now logged out.';

include 'footer.php';?>