<?php 

    $username = "Admin";
    $password = "password";

    $inputUser = "Admin";
    $inputPass = "password";

    if($inputUser == $username && $inputPass == $password) {
        echo "Welcome Admin";
    } else {
        echo "Cannot Login";
    }
?>