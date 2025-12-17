<?php
$filenames = [
            "Jero.txt",
            "J_docblock.php",
            "J_grade.php",
            "J_grade_with_HTML.php",
            "J_multi_line.php",
            "J_single_line.php",
            "J_Task_1_Area_and_perimeter_of_Triangle.php",
            "J_Task_2.php",
            "J_variable.php",
            "J_vote.php",
            "J_vote_with_HTML.php",
            ];

session_start();
include __DIR__ . '/../users.php';
$me = $_SESSION['adminuser'] ?? null;
if ($users == null || !$me || !isset($users[$me]) || !in_array($filenames, $users[$me]['files'])) {
    http_response_code(403);
    exit('Access denied');
}
?>
