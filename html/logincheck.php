<?php
session_start();  

$email = $_POST['email'];
$password = $_POST['password'];
  

if ($email == "ibrarshafin2002@gmail.com") {
    
    $_SESSION['user_id'] = 1; 
    $_SESSION['user_logged_in'] = true;
    header("Location: dashboard.php"); 
    exit();
} else {
    
    header("Location: login.html?error=invalid");
    exit();
}
?>