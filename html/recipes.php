<?php
session_start(); 
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header("Location: login.html"); 
    exit(); 
}
?>

<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta name    = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Recipes - Recipeezz</title>
    <link rel = "stylesheet" href = "../css/dashboard.css">
    <link rel = "stylesheet" href = "../css/dashboard.css">
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

    <main class = "dashboard-main">
    <div  class = "dashboard-header">
            <h1>Recipes</h1>
            <p>Find your next favorite dish.</p>
        </div>

        <section class = "dashboard-section" id = "recipe-search">
            <h2>Search Recipes</h2>
            <div    class = "search-bar">
            <input  type  = "text" placeholder             = "Search for recipes...">
            <button class = "form-button"><i class         = "fa fa-search"></i></button>
            <button id    = "toggle-advanced-search" class = "form-button">Advanced Search</button>
            </div>

            <div   id    = "advanced-search-form" class = "advanced-search-form" style = "display: none;">
            <div   class = "form-group">
            <label for   = "ingredients">Ingredients</label>
            <input type  = "text" id                    = "ingredients" placeholder    = "e.g., chicken, broccoli, rice">
                </div>
                <div    class = "form-group">
                <label  for   = "dietary-needs">Dietary Needs</label>
                <select id    = "dietary-needs">
                <option value = "">Any</option>
                <option value = "vegetarian">Vegetarian</option>
                <option value = "vegan">Vegan</option>
                <option value = "gluten-free">Gluten-Free</option>
                    </select>
                </div>
                <div    class = "form-group">
                <label  for   = "cuisine-type">Cuisine Type</label>
                <select id    = "cuisine-type">
                <option value = "">Any</option>
                <option value = "italian">Italian</option>
                <option value = "mexican">Mexican</option>
                <option value = "chinese">Chinese</option>
                    </select>
                </div>
                <div   class = "form-group">
                <label for   = "cooking-time">Max Cooking Time (minutes)</label>
                <input type  = "number" id = "cooking-time" placeholder = "e.g., 30">
                </div>
                <button class = "form-button">Search Recipes</button>
            </div>
        </section>

        <section class = "dashboard-section" id = "recipe-gallery">
            <h2>Recipe Gallery</h2>
            <div class = "recipe-grid">
            <a   href  = "#" class                             = "recipe-card" data-recipe-id = "1">
            <img src   = "https://via.placeholder.com/200" alt = "Recipe 1">
                    <h3>Pasta Primavera</h3>
                    <p>A fresh and vibrant pasta dish.</p>
                </a>
                <a   href = "#" class                             = "recipe-card" data-recipe-id = "2">
                <img src  = "https://via.placeholder.com/200" alt = "Recipe 2">
                    <h3>Chicken Stir-Fry</h3>
                    <p>Quick and easy weeknight dinner.</p>
                </a>
                <a   href = "#" class                             = "recipe-card" data-recipe-id = "3">
                <img src  = "https://via.placeholder.com/200" alt = "Recipe 3">
                    <h3>Chocolate Cake</h3>
                    <p>Decadent and rich chocolate dessert.</p>
                </a>
            </div>
        </section>

        <section class = "dashboard-section" id = "recipe-detail" style = "display: none;">
            <h2>Recipe Detail</h2>
            <div class = "recipe-detail-grid">
            <div class = "recipe-image">
            <img src   = "https://via.placeholder.com/400" alt = "Recipe Image" id = "detail-image">
                </div>
                <div  class = "recipe-info">
                <h2   id    = "detail-title"></h2>
                <p    class = "recipe-description" id                  = "detail-description"></p>
                <div  class = "recipe-meta">
                <p><i class = "fa fa-clock-o"></i> Prep Time: <span id = "detail-prep-time"></span> minutes</p>
                <p><i class = "fa fa-clock-o"></i> Cook Time: <span id = "detail-cook-time"></span> minutes</p>
                <p><i class = "fa fa-users"></i> Servings: <span id    = "detail-servings"></span></p>
                    </div>
                </div>
            </div>

            <section class = "dashboard-section" id = "recipe-ingredients">
                <h2>Ingredients</h2>
                <ul class = "styled-list" id = "detail-ingredients">
                </ul>
            </section>

            <section class = "dashboard-section" id = "recipe-instructions">
                <h2>Instructions</h2>
                <ol id = "detail-instructions">
                </ol>
            </section>

            <section class = "dashboard-section" id = "recipe-comments">
                <h2>Comments</h2>
                <div class = "comment-list" id = "detail-comments">
                </div>
                <div class = "comment-form">
                    <h3>Add a Comment</h3>
                    <textarea placeholder = "Your comment..."></textarea>
                    <button   class       = "form-button">Post Comment</button>
                </div>
            </section>
        </section>

    </main>

    <footer class = "page-footer">
        <p>&copy; 2025 Recipeezz. Made By Ibrar Amin & Soumodip Madhu</p>
    </footer>
