<?php
if (!isset($requiredFile)) {
    http_response_code(500);
    exit('Configuration error: $requiredFile not set');
}

session_start();
include __DIR__ . '/../users.php';

$me = $_SESSION['adminuser'] ?? null;
if (!$me || !isset($users[$me]) || !in_array($requiredFile, $users[$me]['files'])) {
    http_response_code(403);
    exit('Access denied');
}