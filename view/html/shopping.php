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
        <a href="dashboard.php" class="logo">Recipeezz</a>
        <ul class="header-links">
            <li>
                <a href="category.php"> Category</a>
            </li>
            <li>
                <a href="season.php"> Season</a>
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
    <div class="dashboard-header">
        <h1>Shopping Lists</h1>
        <p>Manage your grocery shopping with ease.</p>
    </div>

    <section class="dashboard-section" id="smart-grocery-list">
        <h2>Smart Grocery List</h2>
        <div class="list-actions">
            <button class="form-button">Generate from Meal Plan</button>
            <input type="text" id="new-item" placeholder="Add New Item">
            <button class="form-button">Add</button>
        </div>
        <ul class="styled-list grocery-list">
            <li>
                <input type="checkbox" id="item1">
                <label for="item1">Milk</label>
            </li>
            <li>
                <input type="checkbox" id="item2">
                <label for="item2">Eggs (1 dozen)</label>
            </li>
            <li>
                <input type="checkbox" id="item3">
                <label for="item3">Bread</label>
            </li>
            <li>
                <input type="checkbox" id="item4">
                <label for="item4">Chicken Breast (1 lb)</label>
            </li>
            <li>
                <input type="checkbox" id="item5">
                <label for="item5">Tomatoes</label>
            </li>
        </ul>
    </section>

    <section class="dashboard-section" id="store-aisle-organizer">
        <h2>Store Aisle Organizer</h2>
        <p>Organized by typical supermarket sections:</p>
        <div class="aisle-list">
            <div class="aisle-category">
                <h3>Dairy</h3>
                <ul>
                    <li>Milk</li>
                    <li>Cheese</li>
                    <li>Yogurt</li>
                </ul>
            </div>
            <div class="aisle-category">
                <h3>Produce</h3>
                <ul>
                    <li>Tomatoes</li>
                    <li>Lettuce</li>
                    <li>Bananas</li>
                </ul>
            </div>
            <div class="aisle-category">
                <h3>Meat</h3>
                <ul>
                    <li>Chicken Breast</li>
                    <li>Ground Beef</li>
                </ul>
            </div>
            <div class="aisle-category">
                <h3>Bakery</h3>
                <ul>
                    <li>Bread</li>
                    <li>Rolls</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="dashboard-section" id="pantry-tracker">
        <h2>Pantry Tracker</h2>
        <p>Keep track of what you have at home:</p>
        <ul class="styled-list pantry-list">
            <li>
                Item: <input type="text" value="Flour"> Quantity: <input type="number" value="2"> unit
            </li>
            <li>
                Item: <input type="text" value="Sugar"> Quantity: <input type="number" value="1"> unit
            </li>
            <li>
                Item: <input type="text" value="Salt"> Quantity: <input type="number" value="1"> unit
            </li>
            <li>
                Item: <input type="text" value="Olive Oil"> Quantity: <input type="number" value="1"> unit
            </li>
        </ul>
    </section>

</main>

<footer class="page-footer">
    <p>&copy; 2025 Recipeezz. Made By Ibrar Amin & Soumodip Madhu</p>
</footer>

</body>

</html>