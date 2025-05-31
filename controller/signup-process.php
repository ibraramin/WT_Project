<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
header('Content-Type: application/json');

require_once "../model/startdb.php";
require_once "../model/user.php";

$loginPageRelativePath = "../html/login.php";

$response = ['success' => false, 'message' => '', 'redirectUrl' => ''];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username      = trim($_POST["username"] ?? '');
    $email         = trim($_POST["email"] ?? '');
    $password      = $_POST["password"] ?? '';
    $conpassword   = $_POST["confirm-password"] ?? '';
    $errorMessages = [];

    if (empty($username)) {
        $errorMessages[] = "Username is required.";
    } elseif (strlen($username) < 3) {
        $errorMessages[] = "Username must be at least 3 characters long.";
    }

    if (empty($email)) {
        $errorMessages[] = "Email address is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessages[] = "Please enter a valid email address.";
    }

    if (empty($password)) {
        $errorMessages[] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errorMessages[] = "Password must be at least 6 characters long.";
    }

    if (empty($conpassword)) {
        $errorMessages[] = "Confirm password is required.";
    } elseif ($password !== $conpassword) {
        $errorMessages[] = "Passwords do not match.";
    }


    if (!empty($errorMessages)) {
        $response['message'] = implode("\n", $errorMessages);
        echo json_encode($response);
        exit;
    }


    if (!$conn || $conn->connect_error) {
        $response['message'] = "Database connection error. Please try again later.";
        error_log("Signup Process Error: Database connection failed. Error: " . ($conn ? $conn->connect_error : "Unknown"));
        echo json_encode($response);
        exit;
    }


    if (function_exists('findEmail') && findEmail($conn, $email)) {
        $response['message'] = "This email address is already registered. Please use a different email or login.";
        echo json_encode($response);
        exit;
    }


    if (function_exists('createUser')) {

        $userCreated = createUser($conn, $username, $email, $password);

        if ($userCreated) {
            $response['success']     = true;
            $response['message']     = "Signup successful! Redirecting to login page...";
            $response['redirectUrl'] = $loginPageRelativePath;


            $_SESSION['notification_message'] = "Account created successfully! Please log in.";
            $_SESSION['notification_type']    = "success";
        } else {
            $response['message'] = "Signup failed due to a server issue. Please try again later.";

            error_log("Signup Process Error: createUser function returned false for email: " . $email);
        }
    } else {
        $response['message'] = "Signup functionality is currently unavailable (createUser function missing).";
        error_log("Signup Process Error: createUser function does not exist.");
    }

    echo json_encode($response);
    exit;
} else {
    $response['message'] = "Invalid request method.";
    $_SESSION['notification_message'] = "Invalid request method.";
    $_SESSION['notification_type']    = "error";
    echo json_encode($response);
    exit;
}
