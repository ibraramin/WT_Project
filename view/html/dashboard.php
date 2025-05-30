<?php
session_start();
if (!isset($_SESSION['user_logged_in'])) {
    header("Location: login.php");
    exit();
}
$userEmail = $_SESSION['user_email'] ?? ($_COOKIE["email"] ?? 'User');
$username  = strtok($userEmail, '@');
?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipeezz Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css" id="theme-stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="dashboard-container">
        <aside class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <a href="dashboard.php" class="sidebar-logo">Recipeezz</a>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="dashboard.php" class="active"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="recipes.php"><i class="fa fa-book"></i> Discover Recipes</a></li>
                    <li><a href="cuisines.php"><i class="fa fa-globe"></i> Cuisines</a></li>
                    <li><a href="category.php"><i class="fa fa-tags"></i> Categories</a></li>
                    <li><a href="meal-plans.php"><i class="fa fa-calendar-plus-o"></i> Meal Plans</a></li>
                    <li><a href="shopping.php"><i class="fa fa-shopping-cart"></i> Shopping List</a></li>
                    <li><a href="reviews.php"><i class="fa fa-pencil-square-o"></i> Pending Reviews</a></li>
                    <li><a href="conversion.php"><i class="fa fa-exchange"></i> Conversion Tools</a></li>
                    <li><a href="season.php"><i class="fa fa-leaf"></i> Seasonal Dishes</a></li>
                </ul>
            </nav>
            <div class="sidebar-footer">
                <div class="user-profile-sidebar">
                    <img src="../assets/images/default-profile.png" alt="Profile" class="profile-image-circle-sidebar">
                    <div class="user-info-sidebar">
                        <span class="username-sidebar"><?php echo htmlspecialchars($userEmail); ?></span>
                        <a href="profile.php" class="profile-link-sidebar">View Profile</a>
                    </div>
                </div>
                <a href="../../controller/logout.php" class="sidebar-logout-btn"><i class="fa fa-sign-out"></i> Logout</a>
                <div class="theme-toggle-placeholder-sidebar">
                </div>
            </div>
        </aside>

        <div class="main-content-wrapper" id="main-content-wrapper">
            <header class="main-header">
                <button class="hamburger-btn" id="hamburger-btn" aria-label="Toggle Menu" aria-expanded="false" aria-controls="sidebar">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="header-title-area">
                    <h1>Welcome, <?php echo htmlspecialchars($_COOKIE["email"]) ?>!</h1>
                </div>
            </header>

            <main class="dashboard-content-area">
                <section class="dashboard-section" id="quick-actions">
                    <h2>Quick Actions</h2>
                    <div class="quick-actions-container">
                        <button class="quick-action-btn" onclick="window.location.href='recipes.php';"><i class="fa fa-search"></i> Find Recipes</button>
                        <button class="quick-action-btn" onclick="window.location.href='meal-plans.php';"><i class="fa fa-calendar-plus-o"></i> Create Meal Plan</button>
                        <button class="quick-action-btn" onclick="window.location.href='shopping.php';"><i class="fa fa-list-alt"></i> View Shopping List</button>
                        <button class="quick-action-btn" onclick="window.location.href='add-recipe.php';"><i class="fa fa-plus-circle"></i> Add My Recipe</button>
                    </div>
                </section>

                <section class="dashboard-section" id="discover-recipes">
                    <h2>Discover New Recipes</h2>
                    <div class="recipe-grid">
                        <div class="recipe-card-v2">
                            <img src="../../assets/biriyani.jpg" class="recipe-image-v2">
                            <div class="recipe-info-v2">
                                <h3 class="recipe-title-v2">Chicken Biryani</h3>
                                <div class="recipe-rating-v2">
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-half-o"></i>
                                    <span>(4.5)</span>
                                </div>
                            </div>
                            <div class="recipe-description-hover-v2">
                                <p>A dish made from aromatic rice and different types of meat and spices.</p>
                                <a href="recipe-detail.php?id=1" class="recipe-link-v2">View Recipe</a>
                            </div>
                        </div>
                        <div class="recipe-card-v2">
                            <img src="../../assets/grill.jpg" class="recipe-image-v2">
                            <div class="recipe-info-v2">
                                <h3 class="recipe-title-v2">Chicken Tikka Masala</h3>
                                <div class="recipe-rating-v2">
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i>
                                    <span>(4.2)</span>
                                </div>
                            </div>
                            <div class="recipe-description-hover-v2">
                                <p>Creamy and flavorful grilled chicken chunks in a spiced tomato sauce.</p>
                                <a href="recipe-detail.php?id=2" class="recipe-link-v2">View Recipe</a>
                            </div>
                        </div>
                        <div class="recipe-card-v2">
                            <img src="../../assets/lemonade.jpg" class="recipe-image-v2">
                            <div class="recipe-info-v2">
                                <h3 class="recipe-title-v2">Lemonade</h3>
                                <div class="recipe-rating-v2">
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                    <span>(4.8)</span>
                                </div>
                            </div>
                            <div class="recipe-description-hover-v2">
                                <p>A refreshing drink perfect for summer.</p>
                                <a href="recipe-detail.php?id=3" class="recipe-link-v2">View Recipe</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="dashboard-section" id="cuisines">
                    <h2>Explore Cuisines</h2>
                    <div class="cuisine-tags-container">
                        <a href="cuisine.php?type=italian" class="cuisine-tag">Italian</a>
                        <a href="cuisine.php?type=mexican" class="cuisine-tag">Mexican</a>
                        <a href="cuisine.php?type=indian" class="cuisine-tag">Indian</a>
                        <a href="cuisine.php?type=chinese" class="cuisine-tag">Chinese</a>
                        <a href="cuisine.php?type=thai" class="cuisine-tag">Thai</a>
                        <a href="cuisine.php?type=french" class="cuisine-tag">French</a>
                    </div>
                </section>

                <section class="dashboard-section" id="summary-widgets">
                    <h2>Your Culinary Stats</h2>
                    <div class="widgets-grid">
                        <div class="widget-card">
                            <div class="widget-icon"><i class="fa fa-heart"></i></div>
                            <div class="widget-content">
                                <h3>Favorite Recipes</h3>
                                <p class="widget-data">12</p>
                                <a href="favorites.php" class="widget-link">View Favorites</a>
                            </div>
                        </div>
                        <div class="widget-card">
                            <div class="widget-icon"><i class="fa fa-calendar"></i></div>
                            <div class="widget-content">
                                <h3>Active Meal Plans</h3>
                                <p class="widget-data">2</p>
                                <a href="meal-plans.php" class="widget-link">Manage Plans</a>
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
                            <div class="widget-icon"><i class="fa fa-pencil-square-o"></i></div>
                            <div class="widget-content">
                                <h3>Pending Reviews</h3>
                                <p class="widget-data">3</p>
                                <a href="pending-reviews.php" class="widget-link">Write Reviews</a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <footer class="main-footer">
                <p>© 2025 Recipeezz. Made By Ibrar Amin & Soumodip Madhu</p>
            </footer>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hamburgerBtn = document.getElementById('hamburger-btn');
            const sidebar = document.getElementById('sidebar');
            const mainContentWrapper = document.getElementById('main-content-wrapper');

            if (hamburgerBtn && sidebar && mainContentWrapper) {
                hamburgerBtn.addEventListener('click', function() {
                    sidebar.classList.toggle('active');
                    mainContentWrapper.classList.toggle('sidebar-active');
                    hamburgerBtn.setAttribute('aria-expanded', sidebar.classList.contains('active'));
                });
            }
        });
    </script>
</body>

</html>