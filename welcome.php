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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <a href="logout.php" class="logout">Logout</a>
        <h1>Welcome <?php echo $_SESSION['adminuser']; ?></h1>
        <section>
            <p>You have successfully logged in.</p>
            <h2>Your Files:</h2>
            <ul>
                <?php foreach ($users[$_SESSION['adminuser']]['files'] as $file):?>
                    <li>
                        <a href="files/<?php echo urlencode($file);?>" class="files">
                            <?php 
                                echo htmlspecialchars($file); 
                            ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
</body>
</html>