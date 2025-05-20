<!DOCTYPE html>
<html lang = "eng">

<head>
    <meta charset = "UTF-8">
    <meta name    = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Recipeezz Landing page</title>
    <link rel = "stylesheet" href = "../css/landing-page.css">
    <link rel = "stylesheet" href = "../css/signup.css">
    <style>

    </style>
</head>

<header>
    <nav>
        <a     href  = "landing-page.html" class = "logo">Recipeezz</a>
        <ul    class = "header-links">
        <li><a href  = "#">Features</a></li>
        <li><a href  = "#">Popular</a></li>
        <li><a href  = "#">Review</a></li>
        <li><a href  = "#">About</a></li>
        <li><a href  = "contact.html" class      = "nav-button">Contact Us</a></li>
        </ul>
        <ul    class = "login-signup-links">
        <li><a href  = "#" class = "nav-button">Login</a></li>
        <li><a href  = "#" class = "nav-button">Signup</a></li>
        </ul>
    </nav>
</header>

<body>
    <div class = "signup-form-container-container">
    <div class = "signup-form-container">
            <h1>Create your new Recipeezz Account</h1>

            <?php
            if (isset($_GET['error'])) {
                echo '<div class="php-message php-error">' . htmlspecialchars($_GET['error']) . '</div>';
            }
            if (isset($_GET['success'])) {
                echo '<div class="php-message php-success">' . htmlspecialchars($_GET['success']) . '</div>';
            }
            ?>

            <form  id    = "signupForm" action = "../../controller/signup-process.php" method = "POST" novalidate>
            <div   class = "input-field">
            <label for   = "name">Full Name</label>
            <input type  = "text" name         = "full-name" id              = "name" required>
            <span  class = "error-message" id  = "nameError"></span>
                </div>
                <div   class = "input-field">
                <label for   = "email">Email Address</label>
                <input type  = "email" name       = "email" id = "email" required>
                <span  class = "error-message" id = "emailError"></span>
                </div>
                <div   class = "input-field">
                <label for   = "password">Password</label>
                <input type  = "password" name    = "password" id = "password" required>
                <span  class = "error-message" id = "passwordError"></span>
                </div>
                <div   class = "input-field">
                <label for   = "confirm-password">Confirm Password</label>
                <input type  = "password" name    = "confirm-password" id = "confirm-password" required>
                <span  class = "error-message" id = "confirmPasswordError"></span>
                </div>
                <button type = "submit" class = "signup-submit-button">Signup</button>
            </form>
            <p>
                Already have an account?
                <a href = "login.html">Sign in</a> </p>
        </div>
    </div>
    <footer>
        <p>&copy; 2025 Recipeezz. Made By Ibrar Amin & Soumodip Madhu</p>
    </footer>

    <script src="../../controller/signup-check.js"></script>
</body>
</html>