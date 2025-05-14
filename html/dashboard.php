<!-- <?php
session_start(); 
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.html"); 
    exit(); 
}
?> -->

<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta name    = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Dashboard - Recipeezz</title>
    <link rel = "stylesheet" href = "../css/dashboard.css">
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
            <li><a href  = "conversion.php">Conversion</a></li>
            <li><a href  = "profile.php">Profile</a></li>
            <li><a href  = "season.php">Seasoanl</a></li>
            <li><a href  = "shopping.php">Shopping List</a></li>
            </ul>
            <ul    class = "nav-actions">
            <li><a href  = "logout.php" class = "nav-button nav-button-logout">Logout</a></li>  </ul>
        </nav>
    </header>
    <main class = "dashboard-main">
    <div  class = "dashboard-header">
        </div>

        <section class = "dashboard-section" id = "quick-actions">
            <h2>Quick Actions</h2>
            <div    class = "quick-actions-container">
            <button class = "quick-action-btn"><i class = "fa fa-search"></i> Find a New Recipe</button>
            <button class = "quick-action-btn"><i class = "fa fa-calendar-plus-o"></i> Create Meal Plan</button>
            <button class = "quick-action-btn"><i class = "fa fa-list-alt"></i> View Shopping List</button>
            <button class = "quick-action-btn"><i class = "fa fa-plus-circle"></i> Add My Own Recipe</button>
            </div>
        </section>

        <section class = "dashboard-section" id = "summary-widgets">
            <h2>Your Summary</h2>
            <div class = "widgets-grid">
            <div class = "widget-card">
            <div class = "widget-icon"><i class = "fa fa-heart"></i></div>
            <div class = "widget-content">
                        <h3>Favorite Recipes</h3>
                        <p class = "widget-data">12</p>
                        <a href  = "#" class = "widget-link">View Favorites</a>
                    </div>
                </div>
                <div class = "widget-card">
                <div class = "widget-icon"><i class = "fa fa-calendar"></i></div>
                <div class = "widget-content">
                        <h3>Active Meal Plans</h3>
                        <p class = "widget-data">2</p>
                        <a href  = "#" class = "widget-link">Manage Plans</a>
                    </div>
                </div>
                <div class = "widget-card">
                <div class = "widget-icon"><i class = "fa fa-shopping-basket"></i></div>
                <div class = "widget-content">
                        <h3>Shopping List Items</h3>
                        <p class = "widget-data">15</p>
                        <a href  = "#" class = "widget-link">View List</a>
                    </div>
                </div>
                <div class = "widget-card">
                <div class = "widget-icon"><i class = "fa fa-cutlery"></i></div>
                <div class = "widget-content">
                        <h3>Recipes Cooked</h3>
                        <p class = "widget-data">28</p>
                        <a href  = "#" class = "widget-link">View History</a>
                    </div>
                </div>
                <div class = "widget-card">
                <div class = "widget-icon"><i class = "fa fa-users"></i></div>
                <div class = "widget-content">
                        <h3>Community Activity</h3>
                        <p class = "widget-data">3 New Comments</p>
                        <a href  = "#" class = "widget-link">View Activity</a>
                    </div>
                </div>
                <div class = "widget-card">
                <div class = "widget-icon"><i class = "fa fa-star"></i></div>
                <div class = "widget-content">
                        <h3>Recently Rated</h3>
                        <p class = "widget-data">Pasta Primavera</p>
                        <a href  = "#" class = "widget-link">View Your Ratings</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class = "page-footer">
        <p>&copy; 2025 Recipeezz. Made By Ibrar Amin & Soumodip Madhu</p>
    </footer>

</body>

</html>