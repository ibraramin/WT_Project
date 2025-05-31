<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipeezz - Grocery & Pantry</title>
    <link rel="stylesheet" href="../css/landing-page.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/conversion.css">
    <link rel="stylesheet" href="../css/shopping.css">
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
            <h1 class="page-title">My Simple Grocery List</h1>

            <section class="dashboard-section">
                <div class="form-inline" style="margin-bottom: 25px;">
                    <div class="form-group" style="flex-grow: 1;">
                        <label for="item-name-input" style="display: block; margin-bottom: 5px;">Item Name:</label>
                        <input type="text" id="item-name-input" placeholder="e.g., Milk">
                    </div>
                    <div class="form-group" style="flex-grow: 1;">
                        <label for="item-qty-input" style="display: block; margin-bottom: 5px;">Quantity:</label>
                        <input type="text" id="item-qty-input" placeholder="e.g., 1 gallon">
                    </div>
                    <button id="add-item-button" class="button1" style="align-self: flex-end;">Add Item</button>
                </div>
            </section>

            <section class="dashboard-section">
                <h2>Items to Buy:</h2>
                <ul id="grocery-list-container">
                </ul>
            </section>

            <section class="dashboard-section action-buttons" style="margin-top: 20px; text-align: right;">
                <button id="clear-purchased-button" class="button1">Remove Purchased</button>
            </section>

        </main>

        <?php include "footer.php" ?>

        <script src="shopping.js"></script>
</body>

</html>