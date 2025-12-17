<?php
$requiredFile = 'David.txt';
include 'guard.php';

$path = __DIR__ . '/' . $requiredFile;
if (!is_file($path)) {
	http_response_code(404);
	exit('File not found');
}
header('Content-Type: text/plain; charset=utf-8');
readfile($path);
exit;
?>
