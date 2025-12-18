<?php
$grade = 79;

if ($grade > 90)
{ 
	$grade = "A";
}
else if($grade > 80)
{
	$grade = "B";
}
else if($grade > 75)
{
	$grade = "C";
}
else  if($grade < 74)
{
	$grade = "F";
}

echo "Student grade: $grade";
?>