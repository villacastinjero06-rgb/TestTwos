<?php
function check_vote()
{
    $name = "John Rey";
    $age = 19;
    if ($age >= 18) {
        echo $name . ", you Are Eligible For Vote";
    } else {
        echo $name . ", you are not eligible for vote. ";
    }
}
check_vote();   

?>