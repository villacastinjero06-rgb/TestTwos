<?php

    // Create a PHP program that will determine if the program is eligible to vote.//
    $name = "Anthony G. Ermitanio";
    $age = 18;
    $membership = "true";

    echo "<h3>Voter's Membership: </h3>";

    if($age >= 18 && $membership == true) {
        echo "$name is elgible to vote for upcoming election.";
    } else {
        echo "$name is underage and not yet ready to vote.";
    }

    echo "<hr>";

    // Create a PHP program that will determine the Grade score of a given grade.//
    $grade = 90;
    $subject = "Computer Programming";

    echo "<h3>Grade Conversion</h3>";

    if($grade >= 90 || $grade <= 100) {
        echo "The grade of $name in $subject is: <h2>A<h2>";
    } elseif($grade >= 80 || $grade <= 89) {
        echo "The grade of $name in $subject is: <h2>B<h2>";
    } elseif($grade >= 75 || $grade <= 79) {
        echo "The grade of $name in $subject is: <h2>C<h2>";
    } elseif($grade <= 74) {
        echo "The grade of $name in $subject is: <h2>F<h2>";
    } else {
        echo "INVALID";
    }

?>