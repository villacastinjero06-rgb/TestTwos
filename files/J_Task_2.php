<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form action="Task_2.php" method="post">
        <label for="Name">Enter your Name:</label><br>
        <input type="text" name="Name"><br>
        <br>
        <label for="password">Enter your Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $username = $_POST ["Name"] ?? "";
    $password = $_POST ["password"] ?? "";

    if ($username === "Admin" && $password === "password") {
        echo "Welcome Admin";
    } else {
        echo "Cannot Login";
    }
}
?>