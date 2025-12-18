<?php

session_start();
include "users.php";

$requestedFile = $_GET['file'] ?? null;

$me = $_SESSION['adminuser'] ?? null;
//This is important. :P
if (!$me) {
    http_response_code(403);
    exit("Access denied: Please log in first");
}

if (!$requestedFile) {
    http_response_code(400);
    exit("Error: No file specified");
}

if (!isset($users[$me])) {
    http_response_code(403);
    exit("Access denied: Invalid user");
}

//user has access?
//this is the most important one. Do not remove -Jero
if (!in_array($requestedFile, $users[$me]["files"])) {
    http_response_code(403);
    exit("Access denied: You do not have permission to access this file");
}

$filePath = __DIR__ . "/files/" . basename($requestedFile);
if (!file_exists($filePath)) {
    http_response_code(404);
    exit("Error: File not found");
}

include $filePath;
?>