<?php
session_start();
if (!isset($_SESSION['user_logged_in'])) {
    header("Location: login.php");  // Adjust path if login.php is in a different directory
    exit();
}
$userEmail = $_SESSION['user_email'] ?? ($_COOKIE["email"] ?? 'User');
$username  = strtok($userEmail, '@');                                   // Ensure $userEmail is not empty before using strtok
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Recipes - Recipeezz</title>
    <link rel="stylesheet" href="../css/dashboard.css" id="theme-stylesheet">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/category.css">
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
                <div class="nav-controls">
                    <ul class="login-signup-links">
                        <li>
                            <a href="../../controller/logout.php" class="button1"> Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="dashboard-main">
            <div class="page-title-header">
                <h1><i class="fa fa-filter"></i> Filter Recipes</h1>
                <p>Refine your search by cuisine, meal type, and dietary needs.</p>
            </div>

            <form id="recipeFilterForm" action="display_filtered_recipes.php" method="GET">
                <section class="dashboard-section" id="cuisine-filter">
                    <h2>Cuisine Type</h2>
                    <ul class="styled-list filter-section-columns">
                        <li><input type="checkbox" id="cuisine-italian" name="cuisine[]" value="italian">
                            <label for="cuisine-italian">Italian</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-mexican" name="cuisine[]" value="mexican">
                            <label for="cuisine-mexican">Mexican</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-indian" name="cuisine[]" value="indian">
                            <label for="cuisine-indian">Indian</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-japanese" name="cuisine[]" value="japanese">
                            <label for="cuisine-japanese">Japanese</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-american" name="cuisine[]" value="american">
                            <label for="cuisine-american">American</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-chinese" name="cuisine[]" value="chinese">
                            <label for="cuisine-chinese">Chinese</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-french" name="cuisine[]" value="french">
                            <label for="cuisine-french">French</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-thai" name="cuisine[]" value="thai">
                            <label for="cuisine-thai">Thai</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-spanish" name="cuisine[]" value="spanish">
                            <label for="cuisine-spanish">Spanish</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-greek" name="cuisine[]" value="greek">
                            <label for="cuisine-greek">Greek</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-korean" name="cuisine[]" value="korean">
                            <label for="cuisine-korean">Korean</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-mediterranean" name="cuisine[]" value="mediterranean">
                            <label for="cuisine-mediterranean">Mediterranean</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-vietnamese" name="cuisine[]" value="vietnamese">
                            <label for="cuisine-vietnamese">Vietnamese</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-moroccan" name="cuisine[]" value="moroccan">
                            <label for="cuisine-moroccan">Moroccan</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-lebanese" name="cuisine[]" value="lebanese">
                            <label for="cuisine-lebanese">Lebanese</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-turkish" name="cuisine[]" value="turkish">
                            <label for="cuisine-turkish">Turkish</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-brazilian" name="cuisine[]" value="brazilian">
                            <label for="cuisine-brazilian">Brazilian</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-caribbean" name="cuisine[]" value="caribbean">
                            <label for="cuisine-caribbean">Caribbean</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-african" name="cuisine[]" value="african">
                            <label for="cuisine-african">African</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-fusion" name="cuisine[]" value="fusion">
                            <label for="cuisine-fusion">Fusion</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-british" name="cuisine[]" value="british">
                            <label for="cuisine-british">British</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-german" name="cuisine[]" value="german">
                            <label for="cuisine-german">German</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-irish" name="cuisine[]" value="irish">
                            <label for="cuisine-irish">Irish</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-persian" name="cuisine[]" value="persian">
                            <label for="cuisine-persian">Persian</label>
                        </li>
                        <li><input type="checkbox" id="cuisine-swedish" name="cuisine[]" value="swedish">
                            <label for="cuisine-swedish">Swedish</label>
                        </li>
                    </ul>
                </section>

                <section class="dashboard-section" id="meal-type-filter">
                    <h2>Meal Type</h2>
                    <ul class="styled-list filter-section-columns">
                        <li><input type="checkbox" id="meal-breakfast" name="meal[]" value="breakfast">
                            <label for="meal-breakfast">Breakfast</label>
                        </li>
                        <li><input type="checkbox" id="meal-lunch" name="meal[]" value="lunch">
                            <label for="meal-lunch">Lunch</label>
                        </li>
                        <li><input type="checkbox" id="meal-dinner" name="meal[]" value="dinner">
                            <label for="meal-dinner">Dinner</label>
                        </li>
                        <li><input type="checkbox" id="meal-snack" name="meal[]" value="snack">
                            <label for="meal-snack">Snack</label>
                        </li>
                        <li><input type="checkbox" id="meal-dessert" name="meal[]" value="dessert">
                            <label for="meal-dessert">Dessert</label>
                        </li>
                        <li><input type="checkbox" id="meal-appetizer" name="meal[]" value="appetizer">
                            <label for="meal-appetizer">Appetizer</label>
                        </li>
                        <li><input type="checkbox" id="meal-side-dish" name="meal[]" value="side-dish">
                            <label for="meal-side-dish">Side Dish</label>
                        </li>
                        <li><input type="checkbox" id="meal-drink" name="meal[]" value="drink">
                            <label for="meal-drink">Drink</label>
                        </li>
                    </ul>
                </section>

                <section class="dashboard-section" id="dietary-needs-filter">
                    <h2>Dietary Needs</h2>
                    <ul class="styled-list filter-section-columns">
                        <li><input type="checkbox" id="diet-vegetarian" name="diet[]" value="vegetarian">
                            <label for="diet-vegetarian">Vegetarian</label>
                        </li>
                        <li><input type="checkbox" id="diet-vegan" name="diet[]" value="vegan">
                            <label for="diet-vegan">Vegan</label>
                        </li>
                        <li><input type="checkbox" id="diet-gluten-free" name="diet[]" value="gluten-free">
                            <label for="diet-gluten-free">Gluten-Free</label>
                        </li>
                        <li><input type="checkbox" id="diet-dairy-free" name="diet[]" value="dairy-free">
                            <label for="diet-dairy-free">Dairy-Free</label>
                        </li>
                        <li><input type="checkbox" id="diet-pescatarian" name="diet[]" value="pescatarian">
                            <label for="diet-pescatarian">Pescatarian</label>
                        </li>
                        <li><input type="checkbox" id="diet-keto" name="diet[]" value="keto">
                            <label for="diet-keto">Keto</label>
                        </li>
                        <li><input type="checkbox" id="diet-paleo" name="diet[]" value="paleo">
                            <label for="diet-paleo">Paleo</label>
                        </li>
                        <li><input type="checkbox" id="diet-low-carb" name="diet[]" value="low-carb">
                            <label for="diet-low-carb">Low Carb</label>
                        </li>
                        <li><input type="checkbox" id="diet-nut-free" name="diet[]" value="nut-free">
                            <label for="diet-nut-free">Nut-Free</label>
                        </li>
                        <li><input type="checkbox" id="diet-low-fat" name="diet[]" value="low-fat">
                            <label for="diet-low-fat">Low Fat</label>
                        </li>
                        <li><input type="checkbox" id="diet-sugar-free" name="diet[]" value="sugar-free">
                            <label for="diet-sugar-free">Sugar-Free</label>
                        </li>
                        <li><input type="checkbox" id="diet-high-protein" name="diet[]" value="high-protein">
                            <label for="diet-high-protein">High Protein</label>
                        </li>
                    </ul>
                </section>

                <section class="dashboard-section" id="search-on-filters">
                    <h2>Search Within Filters</h2>
                    <p>Enter a keyword to search for recipes matching your selected criteria above.</p>
                    <div class="form-group">
                        <input type="text" id="keyword-search" name="keyword" placeholder="e.g., Chicken, Quick Pasta, Healthy Salad">
                    </div>
                    <button type="submit" class="form-button" id="apply-filters-search-btn"><i class="fa fa-search"></i> Search Recipes</button>
                </section>
            </form>
            <section class="dashboard-section" id="filter-actions">
                <h2><i class="fa fa-save"></i> Save Current Filter Combination</h2>
                <div class="form-group">
                    <label for="filter-name">Filter Name:</label>
                    <input type="text" id="filter-name-save" placeholder="e.g., My Weekly Vegan Dinners">
                </div>
                <button type="button" class="form-button" id="save-filter-btn">Save Filter</button>

                <div id="saved-filters-area" style="margin-top: 20px;">
                    <h3>My Saved Filters: </h3>
                    <ul id="saved-filters-list">
                    </ul>
                </div>
            </section>
        </main>

        <?php include "footer.php" ?>
    </div>
    <script src="category.js"> </script>

</body>

</html>