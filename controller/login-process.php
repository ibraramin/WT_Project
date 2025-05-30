<?php
require_once "../model/startdb.php";
require_once "../model/user.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $error    = false;
    if (empty($_POST["email"])) {
        echo "Email Address is required.";
        $error = true;
    }
    if (empty($_POST["password"])) {
        echo "Password is required.";
        $error = true;
    }

    if (strlen($password) < 6) {
        echo "Password has to be more than 6 characters long";
    }

    if (matchPass($conn, $email, $password)) {
        $_SESSION['user_logged_in'] = true;
        $_SESSION['user_email']     = $email;
        setcookie("email", $email, time() + 10000, "/");
        header("Location: ../view/html/dashboard.php");
    } else {
        header("Location:../view/html/login.php");
    }
}
