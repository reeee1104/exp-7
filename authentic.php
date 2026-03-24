<?php
session_start();

// Demo credentials
$valid_username = "admin";
$valid_password = "1234";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $valid_username && $password == $valid_password) {

    // Create session
    $_SESSION['username'] = $username;

    // Set cookie if checkbox is selected
    if (isset($_POST['remember'])) {
        setcookie("username", $username, time() + 86400, "/");
    }

    header("Location: dashboard.php");
} else {
    echo "Invalid login! <a href='login.php'>Try again</a>";
}
?>
