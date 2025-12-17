<?php
//A PHP program that will determine the Grade score of a given grade
$grade = 90; 

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