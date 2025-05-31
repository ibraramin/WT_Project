<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once "../model/startdb.php";
require_once "../model/user.php";

$loginPageURL = "../view/html/login.php";
$dashboardURL = "../view/html/dashboard.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email           = trim($_POST["email"] ?? '');
    $password        = $_POST["password"] ?? '';
    $validationError = false;

    if (empty($email) || empty($password)) {
        $_SESSION['notification_message'] = "Email and password are required.";
        $_SESSION['notification_type']    = "error";
        $validationError                  = true;
    }

    if ($validationError) {
        header("Location: " . $loginPageURL);
        exit;
    }

    $loginSuccess = false;
    if (isset($conn) && function_exists('matchPass')) {
        if (matchPass($conn, $email, $password)) {
            $loginSuccess = true;
        }
    }

    if ($loginSuccess) {
        session_regenerate_id(true);
        $_SESSION['user_logged_in'] = true;
        $_SESSION['user_email']     = $email;

        $name = findEmail($conn, $email);
        setcookie('username', $name['username'], time() + 100000, '/');
        header("Location: " . $dashboardURL);
        exit;
    } else {
        $_SESSION['notification_message'] = "Invalid email or password.";
        $_SESSION['notification_type']    = "error";
        header("Location: " . $loginPageURL);
        exit;
    }
} else {
    $_SESSION['notification_message'] = "Invalid request method.";
    $_SESSION['notification_type']    = "error";
    header("Location: " . $loginPageURL);
    exit;
}
