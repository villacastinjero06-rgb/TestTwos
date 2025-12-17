<?php
$filenames = [
            "Anthony.txt",  
            "A_docblock.php", 
            "A_LOGIN.php", 
            "A_LOGOUT.php", 
            "A_multi_line.php", 
            "A_single_line.php", 
            "A_Triangles.php",
            "A_variable.php",
            "A_Voter_age_and_Grading_System.php",
            ];

session_start();
include __DIR__ . '/../users.php';
$me = $_SESSION['adminuser'] ?? null;
if ($users == null || !$me || !isset($users[$me]) || !in_array($filenames, $users[$me]['files'])) {
    http_response_code(403);
    exit('Access denied');
}

?>
