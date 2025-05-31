<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['email_for_reset'])) {
    $_SESSION['notification_message'] = "Please enter your email address first.";
    $_SESSION['notification_type'] = "error";
    header("Location: forget1.php");
    exit;
}
$email_to_reset = $_SESSION['email_for_reset'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Recipeezz</title>
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
                <h1>Set New Password</h1>
                <p style="text-align:center; font-size:0.9em; color:#555; margin-bottom:10px;">
                    For email: <strong><?php echo htmlspecialchars($email_to_reset, ENT_QUOTES, 'UTF-8'); ?></strong>
                </p>
                <form id="resetPasswordForm" action="../../controller/updatepass.php" method="POST" novalidate>
                    <input type="hidden" name="email_to_reset" value="<?php echo htmlspecialchars($email_to_reset, ENT_QUOTES, 'UTF-8'); ?>">
                    <div class="input-field">
                        <label for="newPassword">New Password</label>
                        <input type="password" id="newPassword" name="newPassword" required>
                        <span class="error-message" id="newPasswordError"></span>
                    </div>
                    <div class="input-field">
                        <label for="confirmNewPassword">Confirm New Password</label>
                        <input type="password" id="confirmNewPassword" name="confirmNewPassword" required>
                        <span class="error-message" id="confirmNewPasswordError"></span>
                    </div>
                    <button type="submit" class="button2">Reset Password</button>
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