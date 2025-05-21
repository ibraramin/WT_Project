<!DOCTYPE html>
<html lang = "eng">
    <head>
        <meta charset = "UTF-8">
        <meta name    = "viewport" content = "width=device-width initial-scale=1.0">
        <title> Recipeezz Landing page</title>
        <link rel = "stylesheet" href = "../css/landing-page.css">
        <link rel = "stylesheet" href = "../css/contact.css">
    </head>
    <header>
        <nav>
            <a  href  = "landing-page.html" class = "logo">Recipeezz</a>
            <ul class = "header-links">
                <li>
                    <a href = "#features"> Features</a>
                </li>
                <li>
                    <a href = "#popular-recipes"> Popular</a>
                </li>
                <li>
                    <a href = "#user-reviews"> Review</a>
                </li>
                <li>
                    <a href = "#about"> About</a>
                </li>
                <li>
                    <a href = "contact.php" class = "nav-button"> Contact Us</a>
                </li>
            </ul>
            <ul class="login-signup-links">
                <li>
                    <a href="../html/login.php" class="nav-button"> Login</a>
                </li>
                <li>
                    <a href="../html/signup.php" class="nav-button"> Signup</a>
                </li>
            </ul>
        </nav>
    </header>

<body>
    <div class="contact-main">
        <div class="contact-header">
            <h1>Get in Touch</h1>
            <p>
                We are always trying to improve, if you have any recommendations and issues, feel free to reach out !!.
            </p>
        </div>
        <div class="contact-stuff">
            <div class="contact-info">
                <h1>Contact Information</h1>
                <p>
                    <i class="fa fa-map-marker"></i>
                    <strong>Address:</strong><br>
                    Dahak 1229, AIUB Bangladesh<br>
                </p>
                <p>
                    <i class="fa fa-phone"></i>
                    <strong>Phone:</strong><br>
                    <a href="tel:1234567890">+880 123 4567890</a>
                </p>
                <p>
                    <i class="fa fa-envelope"></i>
                    <strong>Email:</strong><br>
                    <a href="#">example@fod.com</a>
                </p>
                <h2>Find Us Here</h2>
                <div class="map-container">
                    <iframe
                        src="https://maps.google.com/maps?q=AIUB&hl=es&z=14&amp;output=embed"></iframe>
                </div>
            </div>
            <div class="contact-form">
                <h2>Send Us a Message</h2>
                <form id="contactForm" action="../../controller/contact_process.php" method="POST" novalidate>
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" id="fullName" name="fullName" required>
                        <p class="error-message" id="fullNameError"></p>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                        <p class="error-message" id="emailError"></p>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" required>
                        <p class="error-message" id="subjectError"></p>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea id="message" name="message" rows="6" required></textarea>
                        <p class="error-message" id="messageError"></p>
                    </div>
                    <button type="submit" class="btn-submit-message">Send Message</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2025 Recipeezz. Made By Ibrar Amin & Soumodip Madhu</p>
    </footer>

    <script src="../../controller/contact-check.js"> </script>
</body>

</html>