<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipeezz Login</title> <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/landing-page.css"> <link rel="stylesheet" href="../css/login.css">
</head>
<header>
    <nav>
        <a href="landing-page.html" class="logo">Recipeezz</a>
        <ul class="header-links">
            <li><a href="#">Features</a></li>
            <li><a href="#">Popular</a></li>
            <li><a href="#">Review</a></li>
            <li><a href="#">About</a></li>
            <li><a href="contact.html" class="nav-button">Contact Us</a></li> </ul>
        <ul class="login-signup-links">
            <li><a href="login.php" class="nav-button">Login</a></li> <li><a href="signup.php" class="nav-button">Signup</a></li> </ul>
    </nav>
</header>
<body>
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
                    <input type="password" name="password" id="password" required>
                    <span class="error-message" id="passwordError"></span>
                </div>
                <button type="submit" class="login-submit-button">Login</button>
            </form>
            <a href="#">Forgot your password?</a> <p>Don't have an account?
                <a href="signup.php">Sign up</a> </p>
        </div>
    </div>
    <footer>
        <p>© 2025 Recipeezz. Made By Ibrar Amin & Soumodip Madhu</p>
    </footer>

    <script src="../../controller/login-check.js"> </script>
</body>
</html>