
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="grade">Enter your Grade:</label><br>
        <input type="number" name="grade"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>


<?php
//A PHP program that will determine the Grade score of a given grade
$grade = $_POST["grade"] ?? null;

    echo "You scored " . $grade . "<br>";
if ($grade > 100 ) {
    echo "Invalid grade. Please enter a grade between 0 and 100.";
}
    elseif ($grade >= 90 && $grade <= 100) {
        echo "Grade: A";
    } elseif ($grade >= 80 && $grade <= 89) {
        echo "Grade: B";
    } elseif ($grade >= 75 && $grade <= 79) {
            echo "Grade: C";
    } elseif ($grade <= 74) {
            echo "Grade: F";
    }

?>