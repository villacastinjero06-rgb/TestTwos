<?php
    if (!isset($requiredFile)) {
        http_response_code(500);
        exit("Configuration error: requiredFile not set");
    }

    session_start();
    include __DIR__ . "/../users.php";

    $me = $_SESSION["adminuser"] ?? null;

    //Is logged in?
    if (!$me) {
        http_response_code(403);
        exit("Access denied: Please log in first");
    }

    //Does User have Access?
    if (!isset($users[$me]) || !in_array($requiredFile, $users[$me]["files"])) {
        http_response_code(403);
        exit("Access denied: You do not have permission to access this file");
    }
?>