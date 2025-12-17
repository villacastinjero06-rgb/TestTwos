
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="age">Enter your age:</label><br>
        <input type="number" name="age"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
/*Create a PHP program that will determine if a person is eligible to vote based on their age. 
The program should prompt the user to enter their age and then display a message indicating whether 
they can vote or not. */
//The legal voting age is 18 years old.
$age = $_POST["age"] ?? "";
    echo "You are " . $age . "<br>";
    if ($age === "") {
        echo "Please enter your age.";
    exit;
    }
    if ($age >= 18) {
        echo "You are eligible to vote.";
    } else {
        echo "You are not eligible to vote.";
    }
?>