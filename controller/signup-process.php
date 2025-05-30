<?php
require_once "../model/startdb.php";
require_once "../model/user.php";


session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email       = $_POST["email"];
    $password    = $_POST["password"];
    $conpassword = $_POST["confirm-password"];
    $username = $_POST["username"];
    $errors  = array();

    if (empty($email)) {
        $errors[] = "Email Address is required.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    if (empty($conpassword)) {
        $errors[] = "Confirm Password is required.";
    }

    if (strlen($password) < 6) {
        $errors[] = "Password has to be more than 6 characters long";
    }

    if (strlen($conpassword) < 6) {
        $errors[] = "Password has to be more than 6 characters long";
    }

    if ($conpassword != $password) {
        $errors[] = "Password and Confirm Password has to be same";
    }

    if (findname($conn, $username)) {
        $errors[] = "Username Already Exists";
    }

    if (findEmail($conn, $email)) {
        $errors[] = "Email Already Exists";
    }

    if (count($errors) == 0) {
        $_SESSION['user_logged_in'] = true;
        $_SESSION['name']           = $username;
        $email                      = $_POST["email"];
        createUser($conn, $username, $email, $password);
        setcookie("email", $email, time() + 10000, "/");
        header("Location: ../view/html/dashboard.php");
        exit;
    } else {
        foreach ($errors as $error) {
            echo "<h1 style='color: red;'>" . $error . "</h1>\n";
        }

        $delaySeconds = 3;
        echo "<h2 style='color:blue;'>You will be redirected to the signup page in 3 seconds </h2>";

        echo "<script type='text/javascript'>\n";
        echo "    setTimeout(function() {\n";
        echo "        window.location.href = " . json_encode("../view/html/signup.php") . ";\n";
        echo "    }, " . (3 * 1000) . "); // setTimeout expects milliseconds\n";
        echo "</script>\n";
        exit;
    }
}
