<?php

/* --- activity directions ---
Create a PHP program that will display SUM, PRODUCT, DIFFERENCE, and 
QUOTIENT of variables num_one with 35.2 and 25 as the value of variable num_two.
*/

    $num_one = 35.2;
    $num_two = 25;

    $sum = $num_one + $num_two;
    $product = $num_one * $num_two;
    $difference = $num_one - $num_two;
    $quotient = $num_one / $num_two;

    echo "num_one: " . $num_one . "<br>";
    echo "num_two: " . $num_two . "<br>";
    echo "<br>";
    echo "The SUM of num_one and num_two is: " . $sum . "<br>";
    echo "The PRODUCT of num_one and num_two is: " . $product . "<br>";
    echo "The DIFFERENCE of num_one and num_two is: " . $difference . "<br>";
    echo "The QUOTIENT of num_one and num_two is: " . $quotient . "<br>";

// Created and Tested by: Jero Villacastin

?>
