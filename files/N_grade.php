<?php
$grade_ni_nick = 90;

if ($grade_ni_nick >= 75 && $grade_ni_nick <= 79 ) {
    echo "Grade C";
}
else if ($grade_ni_nick >= 80 && $grade_ni_nick <= 89 ) {
    echo "Grade B";
}
else if ($grade_ni_nick >= 90 && $grade_ni_nick <= 100) {
    echo "Grade A";
}
else if ( $grade_ni_nick <= 74 ){
    echo "Grade F";
}
?>