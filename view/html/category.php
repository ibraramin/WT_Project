<?php
session_start();
if (!isset($_SESSION['user_logged_in'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang = "eng">

<head>
    <meta charset = "UTF-8">
    <meta name    = "viewport" content = "width=device-width initial-scale=1.0">
    <title> Recipeezz Landing page</title>
    <link rel = "stylesheet" href = "../css/landing-page.css">
    <link rel = "stylesheet" href = "../css/dashboard.css">
</head>
<header>
    <nav>
        <a  href  = "landing-page.html" class = "logo">Recipeezz</a>
        <ul class = "header-links">
            <li>
                <a href = "category.php"> Category</a>
            </li>
            <li>
                <a href = "#"> Season</a>
            </li>
            <li>
                <a href = "conversion.php"> Conversion</a>
            </li>
            <li>
                <a href = "shopping.php"> Shopping</a>
            </li>
        </ul>
        <div class = "nav-right-section">
        <div class = "user-profile-display">
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
        <h1>Filter Recipes</h1>
        <p>Refine your search by cuisine, meal type, and dietary needs.</p>
    </div>

    <form id="recipeFilterForm">
        <section class="dashboard-section" id="cuisine-filter">
            <h2>Cuisine Type</h2>
            <ul class="styled-list">
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
            <ul class="styled-list">
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
            </ul>
        </section>

        <section class="dashboard-section" id="dietary-needs-filter">
            <h2>Dietary Needs</h2>
            <ul class="styled-list">
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
            </ul>
        </section>

        <section class="dashboard-section" id="search-on-filters">
            <h2>Search Within Filters</h2>
            <p>Enter a keyword to search for recipes matching your selected criteria above.</p>
            <div class="form-group">
                <input type="text" id="keyword-search" name="keyword" placeholder="e.g., Chicken, Quick Pasta, Healthy Salad">
            </div>
            <button type="submit" class="form-button" id="apply-filters-search-btn">Search Recipes</button>
        </section>

        <section class="dashboard-section" id="filter-actions">
            <h2>Save Current Filter Combination</h2>
            <div class="form-group">
                <label for="filter-name">Filter Name:</label>
                <input type="text" id="filter-name" name="filter_name_save" placeholder="e.g., My Weekly Vegan Dinners">
            </div>
            <button type="button" class="form-button" id="save-filter-btn">Save Filter</button>
        </section>
    </form>
</main>

<footer class="page-footer">
    <p>&copy; 2025 Recipeezz. Made By Ibrar Amin & Soumodip Madhu</p>
</footer>

</body>

</html>
