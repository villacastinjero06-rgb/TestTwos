<?php
$filenames = [
            "John_Michael.txt",
            "JM_docblock.php",
            "JM_GRADE.php",
            "JM_Login.php",
            "JM_multi_line.php",
            "JM_single_line.php",
            "JM_triangles.php",
            "JM_Variable.php",
            "JM_VOTE.php",
            ];

session_start();
include __DIR__ . '/../users.php';
$me = $_SESSION['adminuser'] ?? null;
if ($users == null || !$me || !isset($users[$me]) || !in_array($filenames, $users[$me]['files'])) {
    http_response_code(403);
    exit('Access denied');
}
?>
