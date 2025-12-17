<?php

$score = 95;

if ($score >= 90 && $score <= 100) { 
echo "Grade: A"; 
} elseif ($score >= 80 && $score <= 89) 
{
 echo "Grade: B"; 
} elseif ($score >= 75 && $score <= 79)
 { 
echo "Grade: С"; 
} elseif ($score < 75) {
 echo "Grade: F"; 
echo "Invalid score."; 
} 
?>