<?php
    session_start();
    if(!$_SESSION['adminuser']){
    header("Location: index.php");
    }
    include 'users.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="text-align: center; border: 5px solid black; border-radius: 10px; width: 50rem; margin: 0 auto; padding: 20px; margin-top: 5rem;">
    <h1>Welcome <?php echo $_SESSION['adminuser']; ?></h1>
    <p>You have successfully logged in.</p>
    <p><a href="logout.php">Logout</a></p>
    <h2>Your Files:</h2>
    <ul>
        <?php foreach ($users[$_SESSION['adminuser']]['files'] as $file):?>
            <li><a href="files/<?php 
            echo urlencode($file); 
            ?>">
            <?php 
            echo htmlspecialchars($file); 
            ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>