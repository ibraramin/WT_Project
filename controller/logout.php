<?php

session_start();
$_SESSION = array();
session_destroy();
header("Location: ../view/html/login.php");
setcookie("email", "", time() - 10, "/");
setcookie("username", "", time() - 10, "/");
exit();
