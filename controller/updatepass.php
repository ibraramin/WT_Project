<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once "../model/startdb.php";
require_once "../model/user.php";

$forget2PageURL = "../view/html/forget2.php";
$loginPageURL = "../view/html/login.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_to_reset = trim($_POST['email_to_reset'] ?? '');
    $new_password = $_POST['newPassword'] ?? '';
    $confirm_password = $_POST['confirmNewPassword'] ?? '';

    if (empty($email_to_reset)) {
        $_SESSION['notification_message'] = "An error occurred. Please start over.";
        $_SESSION['notification_type'] = "error";
        header("Location: ../view/html/forget1.php");
        exit;
    }

    $_SESSION['email_for_reset'] = $email_to_reset;

    if (empty($new_password) || empty($confirm_password)) {
        $_SESSION['notification_message'] = "Please enter and confirm your new password.";
        $_SESSION['notification_type'] = "error";
        header("Location: " . $forget2PageURL);
        exit;
    }
    if (strlen($new_password) < 6) {
        $_SESSION['notification_message'] = "Password must be at least 6 characters long.";
        $_SESSION['notification_type'] = "error";
        header("Location: " . $forget2PageURL);
        exit;
    }
    if ($new_password !== $confirm_password) {
        $_SESSION['notification_message'] = "Passwords do not match.";
        $_SESSION['notification_type'] = "error";
        header("Location: " . $forget2PageURL);
        exit;
    }

    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    if (isset($conn) && function_exists('updateUserPasswordByEmail') && updateUserPasswordByEmail($conn, $email_to_reset, $hashed_password)) {
        unset($_SESSION['email_for_reset']);
        $_SESSION['notification_message'] = "Password has been reset successfully! Please log in.";
        $_SESSION['notification_type'] = "success";
        header("Location: " . $loginPageURL);
        exit;
    } else {
        $_SESSION['notification_message'] = "Failed to update password. Please try again.";
        $_SESSION['notification_type'] = "error";
        header("Location: " . $forget2PageURL);
        exit;
    }
} else {
    header("Location: ../view/html/forget1.php");
    exit;
}
