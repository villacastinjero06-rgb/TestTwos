<?php
session_start();
include 'users.php';

$username = isset($_POST['user']) ? strtolower(trim($_POST['user'])) : '';
$password = $_POST['pass'] ?? '';

if ($username !== '' && isset($users[$username]) && $users[$username]['password'] === $password) {
    $_SESSION['adminuser'] = $username;
    header('Location: welcome.php');
    exit;
} else {
    echo "Invalid username or password. <a href='index.php'>Back</a>";
}
?>