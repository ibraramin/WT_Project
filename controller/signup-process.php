<?php

$MIN_PASSWORD_LENGTH = 6;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["full-name"])) {
        echo "Full Name is required.";
    }

    if (empty($_POST["email"])) {
        echo "Email Address is required.";
    } 

    $password = "";
    if (empty($_POST["password"])) {
        echo "Password is required.";
    } else {
        $password = $_POST["password"];
        if (strlen($password) < $MIN_PASSWORD_LENGTH) {
            echo "Password must be at least " . $MIN_PASSWORD_LENGTH . " characters long.";
        }
    }

    if (empty($_POST["confirm-password"])) {
        echo "Confirm Password is required.";
    } else {
        $confirmPassword = $_POST["confirm-password"];
        if ($password !== $confirmPassword) {
            echo "Passwords do not match.";
        }
    }
}
