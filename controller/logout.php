<?php

session_start();
session_destroy();
header("Location: ../view/html/login.php");
exit();
