
<?php

    $age = 18; // Set the age
    // Check if the person is eligible to vote
    if ($age >= 18) { $eligible = true;} else { $eligible = false;}
    
    if ($eligible) {echo "THis person is 18 years old and eligible to vote." ;} else {
     echo "This person is not 18 years old and not eligible to vote." ; }

?>