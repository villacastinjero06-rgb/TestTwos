<?php
session_start();
include 'users.php';
    $username = $_POST['user'];
    $password = $_POST['pass'];


    if (isset($users[$username]) && $users[$username]['password'] == $password) {
        $_SESSION['adminuser'] = $username;
        header("Location: welcome.php");
        exit;
    } else {
        echo "Invalid username or password. <a href='index.php'>Back<a>";
    }
?>