<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once "../model/startdb.php";
require_once "../model/user.php";

$forget1PageURL = "../view/html/forget1.php";
$forget2PageURL = "../view/html/forget2.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email'] ?? '');

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['notification_message'] = "Please enter a valid email address.";
        $_SESSION['notification_type'] = "error";
        header("Location: " . $forget1PageURL);
        exit;
    }

    if (isset($conn) && function_exists('findEmail') && findEmail($conn, $email)) {
        $_SESSION['email_for_reset'] = $email;
        $_SESSION['notification_message'] = "Email found. Please set your new password.";
        $_SESSION['notification_type'] = "info";
        header("Location: " . $forget2PageURL);
        exit;
    } else {
        $_SESSION['notification_message'] = "Email address not found in our records.";
        $_SESSION['notification_type'] = "error";
        header("Location: " . $forget1PageURL);
        exit;
    }
} else {
    header("Location: " . $forget1PageURL);
    exit;
}
