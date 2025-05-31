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
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="dashboard-container">
        <header>
            <nav>
                <a href="dashboard.php" class="logo">Recipeezz</a>
                <ul class="header-links">
                    <li>
                        <a href="conversion.php ">Conversion</a>
                    </li>
                    <li>
                        <a href="shopping.php"> Cart</a>
                    </li>
                    <li>
                        <a href="timer.php"> Timer </a>
                    </li>
                    <li>
                        <a href="category.php"> Category </a>
                    </li>
                </ul>
                <div class="nav-right-section">
                    <div class="user-profile-display">
                        <img src="../assets/images/default-profile.png" alt="Profile" class="profile-image-circle">
                        <div class="user-info">
                            <span class="username">
                                <?php echo htmlspecialchars($_COOKIE["username"]) ?>
                            </span>
                            <a href="profile.php" class="profile-link-nav">View Profile</a>
                        </div>
                    </div>
                    <ul class="nav-actions">
                        <li><a href="../../controller/logout.php" class="button2">Logout</a></li>
                    </ul>
                </div>
            </nav>
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
        <?php include "footer.php" ?>r>
    </div>
    </div>
</body>

</html>