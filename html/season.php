<?php
session_start(); 
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.html"); 
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seasonal Suggestions - Recipeezz</title>
    <link rel = "stylesheet" href = "../css/dashboard.css">
    <link rel = "stylesheet" href = "../css/season.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header class = "page-header">
        <nav>
            <div class = "logo-container">
            <a   href  = "dashboard.php" class = "logo">Recipeezz</a>
            </div>
            <ul    class = "nav-links">
            <li><a href  = "recipes.php">Recipes</a></li>
            <li><a href  = "category.php">Filter</a></li>
            <li><a href  = "season.php">Seasonal</a></li>
            <li><a href  = "conversion.php">Calculator</a></li>
            <li><a href  = "shopping.php">Shopping</a></li>
            <li><a href  = "profile.php">Profile</a></li>
            </ul>
            <ul    class = "nav-actions">
            <li><a href  = "landing-page.html" class = "nav-button nav-button-logout">Logout</a></li>
            </ul>
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
                        <li>Asparagus</li>
                        <li>Strawberries</li>
                        <li>Peas</li>
                        <li>Spinach</li>
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
                        <li>Brussels Sprouts</li>
                    </ul>
                </li>
                <li>
                    <h3>Winter</h3>
                    <ul>
                        <li>Citrus Fruits</li>
                        <li>Root Vegetables</li>
                        <li>Kale</li>
                        <li>Pomegranates</li>
                    </ul>
                </li>
            </ul>
        </section>

        <section class="dashboard-section" id="holiday-collections">
            <h2>Holiday Collections</h2>
            <p>Celebrate special occasions with these festive recipes:</p>
            <div class="holiday-grid">
                <a href="#" class="holiday-card">
                    <div class="holiday-icon"><i class="fa fa-turkey"></i></div>
                    <h3>Thanksgiving</h3>
                </a>
                <a href="#" class="holiday-card">
                    <div class="holiday-icon"><i class="fa fa-tree"></i></div>
                    <h3>Christmas</h3>
                </a>
                <a href="#" class="holiday-card">
                    <div class="holiday-icon"><i class="fa fa-egg"></i></div>
                    <h3>Easter</h3>
                </a>
                <a href="#" class="holiday-card">
                    <div class="holiday-icon"><i class="fa fa-smile-o"></i></div>
                    <h3>Halloween</h3>
                </a>
            </div>
        </section>

        <section class="dashboard-section" id="farmers-market-finder">
            <h2>Farmers Market Finder</h2>
            <p>Find fresh, local produce near you:</p>
            <p><em>[Interactive map or search functionality will go here - requires JavaScript]</em></p>
        </section>

    </main>

    <footer class="page-footer">
        <p>&copy; 2025 Recipeezz. Made By Ibrar Amin & Soumodip Madhu</p>
    </footer>

</body>

</html>