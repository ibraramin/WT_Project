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
    <title>Profile - Recipeezz</title>
    <link rel = "stylesheet" href = "../css/dashboard.css">
    <link rel = "stylesheet" href = "../css/profile.css">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header class="page-header">
        <nav>
            <div class="logo-container">
                <a href="dashboard.php" class="logo">Recipeezz</a>
            </div>
            <ul    class = "nav-links">
            <li><a href  = "recipes.php">Recipes</a></li>
            <li><a href  = "category.php">Filter</a></li>
            <li><a href  = "season.php">Seasonal</a></li>
            <li><a href  = "conversion.php">Calculator</a></li>
            <li><a href  = "shopping.php">Shopping</a></li>
            <li><a href  = "profile.php">Profile</a></li>
            </ul>
            <ul class="nav-actions">
                <li><a href="landing-page.html" class="nav-button nav-button-logout">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main class="dashboard-main">
        <div class="dashboard-header">
            <h1>Your Profile</h1>
            <p>Manage your account details and settings.</p>
        </div>

        <section class="dashboard-section" id="user-information">
            <h2>User Information</h2>
            <div class="profile-grid">
                <div class="profile-avatar">
                    <img src="https://via.placeholder.com/150" alt="User Avatar">
                </div>
                <div class="profile-details">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" value="John Doe">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" value="john.doe@example.com">
                    </div>
                    <button class="form-button">Update Profile</button>
                </div>
            </div>
        </section>

        <section class="dashboard-section" id="settings">
            <h2>Settings</h2>
            <div class="settings-grid">
                <div class="setting-option">
                    <h3>Change Password</h3>
                    <div class="form-group">
                        <label for="current-password">Current Password</label>
                        <input type="password" id="current-password">
                    </div>
                    <div class="form-group">
                        <label for="new-password">New Password</label>
                        <input type="password" id="new-password">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm New Password</label>
                        <input type="password" id="confirm-password">
                    </div>
                    <button class="form-button">Change Password</button>
                </div>
                <div class="setting-option">
                    <h3>Notifications</h3>
                    <div class="form-group">
                        <input type="checkbox" id="email-notifications" checked>
                        <label for="email-notifications">Receive email notifications</label>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="push-notifications">
                        <label for="push-notifications">Receive push notifications</label>
                    </div>
                    <button class="form-button">Update Notifications</button>
                </div>
            </div>
        </section>

        <section class="dashboard-section" id="user-activity">
            <h2>Your Activity</h2>
            <ul class="activity-list">
                <li>Added recipe: Chicken Biriyani - 2 days ago</li>
                <li>Commented on recipe: Chicken Malai Curry - 1 week ago</li>
                <li>Rated recipe: Chocolate Cake - 2 weeks ago</li>
            </ul>
        </section>

    </main>

    <footer class="page-footer">
        <p>&copy; 2025 Recipeezz. Made By Ibrar Amin & Soumodip Madhu</p>
    </footer>

</body>

</html>