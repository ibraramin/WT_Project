<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errorsFound = false;
    $email    = "";
    $password = "";
    if (empty($_POST["email"])) {
        echo "Email Address is required.<br>";
    } else {
        $email = trim($_POST["email"]);
    }
    if (empty($_POST["password"])) {
        echo "Password is required.<br>";
    } else {
        $password = $_POST["password"];
    }
} 
