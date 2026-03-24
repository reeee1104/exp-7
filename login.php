<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post" action="authenticate.php">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    Remember Me: <input type="checkbox" name="remember"><br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>
