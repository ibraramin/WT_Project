<?php
session_start();

$_SESSION = array();
session_destroy();

header("Location: landing-page.html");
exit();
?>