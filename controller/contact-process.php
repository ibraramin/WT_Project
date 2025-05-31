<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once "../model/startdb.php";
require_once "../model/contact.php";

$redirectURL = "../view/html/contact.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName        = trim($_POST["fullName"] ?? '');
    $email           = trim($_POST["email"] ?? '');
    $subject         = trim($_POST["subject"] ?? '');
    $message         = trim($_POST["message"] ?? '');
    $validationError = false;

    if (empty($fullName) || empty($email) || ! filter_var($email, FILTER_VALIDATE_EMAIL) || empty($subject) || empty($message)) {
        $_SESSION['notification_message'] = "All fields are required and email must be valid.";
        $_SESSION['notification_type']    = "error";
        $validationError                  = true;
    }

    if (! $validationError) {

        if (isset($conn) && addContact($conn, $fullName, $email, $subject, $message)) {
            $_SESSION['notification_message'] = "Your message has been submitted successfully!";
            $_SESSION['notification_type']    = "success";
        } else {
            $_SESSION['notification_message'] = "Failed to submit message. Please try again.";
            $_SESSION['notification_type']    = "error";
        }
    }
    header("Location: " . $redirectURL);
    exit;
} else {
    $_SESSION['notification_message'] = "Invalid request.";
    $_SESSION['notification_type']    = "error";
    header("Location: " . $redirectURL);
    exit;
}
