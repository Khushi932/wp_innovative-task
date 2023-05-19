<?php
// set cookie variables
$cookie_name = "user";
$cookie_value = "kishan";

// set cookie with expiration time
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

?>

<?php
echo "Welcome " . $_COOKIE['user'] . "!";
?>
