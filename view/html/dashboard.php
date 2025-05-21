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
</head>
<header>
    <nav>
        <a href="landing-page.html" class="logo">Recipeezz</a>
        <ul class="header-links">
            <li>
                <a href="category.php"> Category</a>
            </li>
            <li>
                <a href="#"> Season</a>
            </li>
            <li>
                <a href="conversion.php"> Conversion</a>
            </li>
            <li>
                <a href="shopping.php"> Shopping</a>
            </li>
        </ul>
        <div class="nav-right-section">
            <div class="user-profile-display">
                <img src="../assets/images/default-profile.png" alt="Profile" class="profile-image-circle">
                <div class="user-info">
                    <span class="username">
                        <?php echo isset($_SESSION['user_email']) ? htmlspecialchars($_SESSION['user_email']) : 'User'; ?>
                    </span>
                    <a href="profile.php" class="profile-link-nav">View Profile</a>
                </div>
            </div>
            <ul class="nav-actions">
                <li><a href="../../controller/logout.php" class="nav-button nav-button-logout">Logout</a></li>
            </ul>
        </div>
    </nav>
</header>
<main class="dashboard-main">
    <div class="page-title-header">
        <h1>Welcome to Your Dashboard</h1>
        <p>Here's a quick overview of your culinary world.</p>
    </div>

    <section class="dashboard-section" id="quick-actions">
        <h2>Quick Actions</h2>
        <div class="quick-actions-container">
            <button class="quick-action-btn" onclick="window.location.href='recipes.php';"><i class="fa fa-search"></i> Find a New Recipe</button>
            <button class="quick-action-btn"><i class="fa fa-calendar-plus-o"></i> Create Meal Plan</button>
            <button class="quick-action-btn" onclick="window.location.href='shopping.php';"><i class="fa fa-list-alt"></i> View Shopping List</button>
            <button class="quick-action-btn"><i class="fa fa-plus-circle"></i> Add My Own Recipe</button>
        </div>
    </section>

    <section class="dashboard-section" id="summary-widgets">
        <h2>Your Summary</h2>
        <div class="widgets-grid">
            <div class="widget-card">
                <div class="widget-icon"><i class="fa fa-heart"></i></div>
                <div class="widget-content">
                    <h3>Favorite Recipes</h3>
                    <p class="widget-data">12</p>
                    <a href="#" class="widget-link">View Favorites</a>
                </div>
            </div>
            <div class="widget-card">
                <div class="widget-icon"><i class="fa fa-calendar"></i></div>
                <div class="widget-content">
                    <h3>Active Meal Plans</h3>
                    <p class="widget-data">2</p>
                    <a href="#" class="widget-link">Manage Plans</a>
                </div>
            </div>
            <div class="widget-card">
                <div class="widget-icon"><i class="fa fa-shopping-basket"></i></div>
                <div class="widget-content">
                    <h3>Shopping List Items</h3>
                    <p class="widget-data">15</p>
                    <a href="shopping.php" class="widget-link">View List</a>
                </div>
            </div>
            <div class="widget-card">
                <div class="widget-icon"><i class="fa fa-cutlery"></i></div>
                <div class="widget-content">
                    <h3>Recipes Cooked</h3>
                    <p class="widget-data">28</p>
                    <a href="#" class="widget-link">View History</a>
                </div>
            </div>
            <div class="widget-card">
                <div class="widget-icon"><i class="fa fa-users"></i></div>
                <div class="widget-content">
                    <h3>Community Activity</h3>
                    <p class="widget-data">3 New Comments</p>
                    <a href="#" class="widget-link">View Activity</a>
                </div>
            </div>
            <div class="widget-card">
                <div class="widget-icon"><i class="fa fa-star"></i></div>
                <div class="widget-content">
                    <h3>Recently Rated</h3>
                    <p class="widget-data">Pasta Primavera</p>
                    <a href="#" class="widget-link">View Your Ratings</a>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="page-footer">
    <p>&copy; 2025 Recipeezz. Made By Ibrar Amin & Soumodip Madhu</p>
</footer>

</body>

</html>