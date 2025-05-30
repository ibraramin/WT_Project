<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipeezz Login</title>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/login-light.css" id="login-theme-stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php require_once "header.php"; ?>
    <main class="main-content">
        <div class="login-form-container-container">
            <div class="login-form-container">
                <h1>Login to Your Account</h1>
                <form id="loginForm" action="../../controller/login-process.php" method="POST" novalidate>
                    <div class="input-field">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" required>
                        <span class="error-message" id="emailError"></span>
                    </div>
                    <div class="input-field">
                        <label for="password">Password</label>
                        <div class="password-wrapper">
                            <input type="password" name="password" id="password" required>
                            <i class="fa fa-eye show-password-icon" id="togglePassword"></i>
                        </div>
                        <span class="error-message" id="passwordError"></span>
                    </div>
                    <button type="submit" class="button2" id="submit-button">Login</button>
                </form>
                <a href="#" class="form-link">Forgot your password?</a>
                <p class="form-footer-text">Don't have an account? <a href="signup.php" class="form-link">Sign up</a></p>
            </div>
        </div>
    </main>
    <?php include "footer.php"; ?>
    <script src="login.js" type="module"></script>
</body>

</html>