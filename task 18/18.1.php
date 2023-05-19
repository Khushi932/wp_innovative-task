<?php
$_SESSION['username'] = 'John';
$_SESSION['user_id'] = 123;

session_start(); // start the session

// access session variables
echo "Welcome " . $_SESSION['username'] . "! Your user ID is " . $_SESSION['user_id'];
?>

