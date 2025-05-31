<?php
session_start(); // Optional, if you use sessions

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Cooking Timers - Recipeezz</title>
    <link rel = "stylesheet" href = "../css/dashboard.css">
    <link rel = "stylesheet" href = "../css/common.css">
    <link rel="stylesheet" href="../css/timer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <div class="dashboard-container">
        <header>
            <nav>
                <a href="dashboard.php" class="logo">Recipeezz</a>
                <ul class="header-links">
                    <li>
                        <a href="conversion.php ">Conversion</a>
                    </li>
                    <li>
                        <a href="shopping.php"> Cart</a>
                    </li>
                    <li>
                        <a href="timer.php"> Timer </a>
                    </li>
                    <li>
                        <a href="category.php"> Category </a>
                    </li>
                </ul>
                <div class="nav-controls">
                    <ul class="login-signup-links">
                        <li>
                            <a href="../../controller/logout.php" class="button1"> Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="timer-page-container">
            <div class="page-header">
                <h1><i class="fas fa-stopwatch"></i> Simple Cooking Timers</h1>
            </div>

            <form class="add-timer-form" id="addTimerForm">
                <div class="form-group">
                    <label for="timerName">Timer Name</label>
                    <input type="text" id="timerName" placeholder="e.g., Pasta" required>
                </div>
                <div class="form-group">
                    <label for="timerMinutes">Minutes</label>
                    <input type="number" id="timerMinutes" placeholder="10" min="0" value="1">
                </div>
                <div class="form-group">
                    <label for="timerSeconds">Seconds</label>
                    <input type="number" id="timerSeconds" placeholder="0" min="0" max="59" value="0">
                </div>
                <button type="submit"><i class="fas fa-plus"></i> Add Timer</button>
            </form>

            <div id="multi-timer-panel">
            </div>
        </div>

        <audio id="timerAlarmSound" src="../assets/sounds/alarm.mp3" preload="auto"></audio>
        <script src="timer.js"></script>
</body>

</html>