<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Recipeezz</title>
    <link rel = "stylesheet" href = "../css/common.css">
    <link rel = "stylesheet" href = "../css/login-light.css">
    <link rel = "stylesheet" href = "../css/noti.css">
</head>

<body>
    <?php require_once "header.php"; ?>

    <?php if (isset($_SESSION['notification_message'])): ?>
        <div class="notification-bar <?php echo htmlspecialchars($_SESSION['notification_type'] ?? 'info', ENT_QUOTES, 'UTF-8'); ?>">
            <span class="message-content"><?php echo htmlspecialchars($_SESSION['notification_message'], ENT_QUOTES, 'UTF-8'); ?></span>
            <button type="button" class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
        </div>
        <?php
        unset($_SESSION['notification_message']);
        if (isset($_SESSION['notification_type'])) {
            unset($_SESSION['notification_type']);
        }
        ?>
    <?php endif; ?>

    <main class="main-content">
        <div class="login-form-container-container">
            <div class="login-form-container">
                <h1>Forgot Your Password?</h1>
                <p style="text-align:center; font-size:0.9em; color:#555; margin-bottom:20px;">
                    Enter your email address. If it's in our system, you'll be able to reset your password.
                </p>
                <form id="forgotPasswordEmailForm" action="../../controller/emailExists.php" method="POST" novalidate>
                    <div class="input-field">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                        <span class="error-message" id="emailError"></span>
                    </div>
                    <button type="submit" class="button2">Check Email</button>
                </form>
                <div style="text-align:center; margin-top:20px;">
                    <a href="login.php" class="form-link">Back to Login</a>
                </div>
            </div>
        </div>
    </main>

    <?php require_once "footer.php"; ?>
</body>

</html>