<?php

require_once "../model/startdb.php";
require_once "../model/contact.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $email    = $_POST["email"];
    $subject  = $_POST["subject"];
    $message  = $_POST["message"];
    $error    = false;

    if (empty($fullName)) {
        echo "Full Name is required.<br>";
        $error = true;
    }

    if (empty($email)) {
        echo "Email Address is required.<br>";
        $error = true;
    }

    if (empty($subject)) {
        echo "Subject is required.<br>";
        $error = true;
    }

    if (empty($message)) {
        echo "Your Message is required.<br>";
        $error = true;
    }

    if (!$error) {
        addContact($conn, $fullName, $email, $subject, $message);
    }
}
