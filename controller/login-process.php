<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email       = "";
    $password    = "";
    $error = false;
    if (empty($_POST["email"])) {
        echo "Email Address is required.";
        $error = true;
    }
    if (empty($_POST["password"])) {
        echo "Password is required.";
        $error = true;
    }

    if (!$error) {
        $_SESSION['user_logged_in'] = true;
        $_SESSION['user_email']     = $user_email;
        header("Location: ../view/html/dashboard.php");
    }
}
?>
