<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipeezz Signup</title>
    <link rel = "stylesheet" href = "../css/common.css">
    <link rel = "stylesheet" href = "../css/noti.css">
    <link rel = "stylesheet" href = "../css/login-light.css">
    <link rel = "stylesheet" href = "../css/signup-light.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php require_once "header.php"; ?>
    <main class="main-content">
        <div class="login-form-container-container">
            <div class="login-form-container">
                <h1>Start your Recipeezz Journey!</h1>

                <div id="ajaxFormMessages"></div>

                <form id="signupForm" action="../../controller/signup-process.php" method="POST" novalidate>
                    <div class="input-field">
                        <label for="username">Username</label> <input type="text" name="username" id="username" required>
                    </div>
                    <div class="input-field">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="input-field">
                        <label for="password">Password</label>
                        <div class="password-wrapper">
                            <input type="password" name="password" id="password" required>
                            <i class="fa fa-eye show-password-icon" id="togglePassword"></i>
                        </div>
                    </div>
                    <div class="input-field">
                        <label for="password2">Confirm Password</label>
                        <div class="password-wrapper">
                            <input type="password" name="confirm-password" id="password2" required>
                            <i class="fa fa-eye show-password-icon" id="togglePassword2"></i>
                        </div>
                    </div>
                    <button type="submit" class="button2" id="signupSubmitButton">Sign Up</button>
                </form>
                <p class="form-footer-text">Already have an account? <a href="login.php" class="form-link">Login</a></p>
            </div>
        </div>
    </main>
    <?php include "footer.php"; ?>
    <script type="module" src="signup.js"></script>
</body>

</html>