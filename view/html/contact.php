<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title> Recipeezz Contact Us</title>
    <link rel="stylesheet" href="../css/contact-light.css" id="theme-stylesheet">
    <link rel="stylesheet" href="../css/common.css" id="theme-stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php require_once "header.php"; ?>
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
                    <strong>Address: </strong><br>
                    Dahak 1229, AIUB Bangladesh<br>
                </p>
                <p>
                    <i class="fa fa-phone"></i>
                    <strong>Phone: </strong><br>
                    <a href="tel:1234567890">+880 123 4567890</a>
                </p>
                <p>
                    <i class="fa fa-envelope"></i>
                    <strong>Email: </strong><br>
                    <a href="mailto:example@fod.com">example@fod.com</a>
                </p>
                <h2>Find Us Here</h2>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6920470063637!2d90.42277391539099!3d23.79334429292384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7ba92f0b99d%3A0x1f336a07f4894915!2sAmerican%20International%20University-Bangladesh%20(AIUB)!5e0!3m2!1sen!2sbd!4v1678886433211!5m2!1sen!2sbd"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="contact-form">
                <h2>Send Us a Message</h2>
                <form id="contactForm" action="../../controller/contact-process.php" method="POST" novalidate>
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

    <script src="../../view/html/contact.js" type="module"> </script>
</body>

</html>