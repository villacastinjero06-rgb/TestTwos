<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <main>
        <?php
            session_start();
            include "users.php";
                $username = $_POST["user"];
                $password = $_POST["pass"];

                if (isset($users[$username]) && $users[$username]["password"] == $password) {
                    $_SESSION["adminuser"] = $username;
                    header("Location: welcome.php");
                    exit;
                } else {
                    echo "Invalid username or password. <a href='index.php'>Back</a>";
                }
        ?>
    </main>
</body>
</html>