<?php
session_start();
if (!isset($_SESSION['user_logged_in'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title> Recipeezz Landing page</title>
    <link rel="stylesheet" href="../css/landing-page.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<header>
    <nav>
        <a  href  = "dashboard.php" class = "logo">Recipeezz</a>
        <ul class = "header-links">
            <li>
                <a href = "category.php"> Category</a>
            </li>
            <li>
                <a href = "season.php"> Season</a>
            </li>
            <li>
                <a href = "conversion.php"> Conversion</a>
            </li>
            <li>
                <a href = "shopping.php"> Shopping</a>
            </li>
        </ul>
        <div  class = "nav-right-section">
        <div  class = "user-profile-display">
        <img  src   = "../assets/images/default-profile.png" alt = "Profile" class = "profile-image-circle">
        <div  class = "user-info">
        <span class = "username">
                        <?php echo htmlspecialchars($_COOKIE["email"]) ?>
                    </span>
                    <a href = "profile.php" class = "profile-link-nav">View Profile</a>
                </div>
            </div>
            <ul    class = "nav-actions">
            <li><a href  = "../../controller/logout.php" class = "nav-button nav-button-logout">Logout</a></li>
            </ul>
        </div>
    </nav>
</header>

<main class="dashboard-main">
    <div class="dashboard-header">
        <h1>Seasonal Suggestions</h1>
        <p>Discover recipes and ingredients for every season.</p>
    </div>

    <section class="dashboard-section" id="seasonal-produce">
        <h2>Seasonal Produce Guide</h2>
        <p>Find out what's fresh and delicious right now:</p>
        <ul class="styled-list">
            <li>
                <h3>Spring</h3>
                <ul>
                    <li>Watermelon</li>
                    <li>Guava</li>
                    <li>Sojne</li>
                    <li>Eggplant</li>
                </ul>
            </li>
            <li>
                <h3>Summer</h3>
                <ul>
                    <li>Tomatoes</li>
                    <li>Corn</li>
                    <li>Berries</li>
                    <li>Zucchini</li>
                </ul>
            </li>
            <li>
                <h3>Autumn</h3>
                <ul>
                    <li>Pumpkins</li>
                    <li>Apples</li>
                    <li>Sweet Potatoes</li>
                    <li>Cabbage</li>
                </ul>
            </li>
            <li>
                <h3>Winter</h3>
                <ul>
                    <li>Cauliflower</li>
                    <li>Tomatoes</li>
                    <li>Orange</li>
                    <li>Apple</li>
                </ul>
            </li>
        </ul>
    </section>

    <section class="dashboard-section" id="holiday-collections">
        <h2>Holiday Collections</h2>
        <p>Celebrate special occasions with these festive recipes:</p>
        <div class="holiday-grid">
            <a href="#" class="holiday-card">
                <div class="holiday-icon"><i class="fa fa-moon-o"></i></div>
                <h3>Eid-ul-Fitr</h3>
            </a>
            <a href="#" class="holiday-card">
                <div class="holiday-icon"><i class="fa fa-sun-o"></i></div>
                <h3>Pohela Boishakh</h3>
            </a>
        </div>
    </section>
</main>

<footer class="page-footer">
    <p>&copy; 2025 Recipeezz. Made By Ibrar Amin & Soumodip Madhu</p>
</footer>

</body>

</html>