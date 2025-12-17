<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In Form</title>
</head>
<body style="font-size: 15px;">
    <h3> 
        <b> LOG-IN </b>
    </h3>

    <form action="A_LOGIN.php" method="post">
        <p> 
            Username: 
        </p>
        <input type="text" name="admin" placeholder="Enter" required>

        <p> 
            Password:
        </p>
        <input type="password" name="password" placeholder="Enter" required>

        <p> <button type="submit"> SUBMIT </button> </p>
    </form>

    <?php
        $admin="admin";
        $password="password";

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $ADMIN=$_POST['admin'] ?? "";
            $PASSWORD=$_POST['password']?? "";


            if($ADMIN === $admin && $PASSWORD === $password) {
                header("Location:A_LOGOUT.php");
                exit();
            } else {
                echo "Cannot LOG-IN";
            }
        }
    ?>

</body>
</html>