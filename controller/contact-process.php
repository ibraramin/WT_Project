<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = "";
    $email    = "";
    $subject  = "";
    $message  = "";

    if (empty($_POST["fullName"])) {
        echo "Full Name is required.<br>";
    }

    if (empty($_POST["email"])) {
        echo "Email Address is required.<br>";
    }

    if (empty($_POST["subject"])) {
        echo "Subject is required.<br>";
    }

    if (empty($_POST["message"])) {
        echo "Your Message is required.<br>";
    }

}
