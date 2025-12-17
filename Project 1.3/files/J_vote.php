
<?php
/*Create a PHP program that will determine if a person is eligible to vote based on their age. 
The program should prompt the user to enter their age and then display a message indicating whether 
they can vote or not. */
//The legal voting age is 18 years old.
$age = 18;
    echo "You are " . $age . "<br>";
    if ($age >= 18) {
        echo "You are eligible to vote.";
    } else {
        echo "You are not eligible to vote.";
            }

?>