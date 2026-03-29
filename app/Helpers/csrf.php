<?php 

function csrf_token()
{
    if (!isset($_SESSION)) {
        session_start();
    }

    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['csrf_token'];
}

function csrf_check($token)
{
    if (!isset($_SESSION)) {
        session_start();
    }

    return isset($_SESSION['csrf_token']) &&
           hash_equals($_SESSION['csrf_token'], $token);
}