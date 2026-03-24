<?php
session_start();

// Destroy session
session_destroy();

// Delete cookie
setcookie("username", "", time() - 3600, "/");

header("Location: login.php");
exit();
?>
