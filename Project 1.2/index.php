<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
    <h2>Login</h2>
    <form action="process_Login.php" method="post">
        <label for="user">Username:</label><br>
        <input type="text" name="user" id="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="pass" id="password" required><br><br>
        <button type="submit" value="Login">Login</button>
    </form>
    </main>
</body>
</html>
<?php
    session_start();
    if(@$_SESSION ['adminuser']){
        header("Location:welcome.php");
    }
?>