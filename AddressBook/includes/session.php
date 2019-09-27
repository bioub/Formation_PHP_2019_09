<?php

function session_start_once() {
    if (!isset($_SESSION)) {
        session_start();
    }
}

function session_log_user($user) {
    $_SESSION['connectedUser'] = $user;
}

function session_get_log_user() {
    return $_SESSION['connectedUser'] ?? null;
}

function checkConnectedOrRedirect() {
    session_start_once();
    
    $connectedUser = session_get_log_user();
    
    if (!$connectedUser) {
        header('HTTP/1.1 302 Found');
        header('Location: login.php');
       exit;
    }
}