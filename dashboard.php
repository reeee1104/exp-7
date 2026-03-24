<?php
session_start();

// Check session
if (!isset($_SESSION['username'])) {

    // Check cookie
    if (isset($_COOKIE['username'])) {
        $_SESSION['username'] = $_COOKIE['username'];
    } else {
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome <?php echo $_SESSION['username']; ?>!</h2>
<p>You are logged in successfully.</p>

<a href="logout.php">Logout</a>

</body>
</html>
