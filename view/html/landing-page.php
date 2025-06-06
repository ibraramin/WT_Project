<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title> Recipeezz Landing page</title>
    <link rel="stylesheet" href="../css/common.css" id="theme-stylesheet">
    <link rel="stylesheet" href="../css/landing-page-light.css" id="theme-stylesheet">
</head>
<!-- Added the header in a different file to reduce code duplication -->
<?php require_once "header.php"; ?>

<body>
    <main class="main-content">
        <section class="hero">
            <div class="hero-left">
                <h1 class="hero-title"> Recipeezz</h1>
                <p class="hook-line"> Recipeezz is very good please use it.</p>
                <form class="hero-recipe-search-form">
                    <input type="text" placeholder="search for recipes" class="hero-recipe-search-field">
                    <button type="submit" class="hero-search-button">Search</button>
                </form>
                <div class="hero-popular-searches">
                    <span>Popular</span>
                    <a href="#"> Chicken</a>
                    <a href="#"> Traditional</a>
                    <a href="#"> Beef</a>
                    <a href="#"> Vegan</a>
                </div>
            </div>
            <div class="hero-right">
                <img src="../../assets/landing-page-hero-bg.jpeg" class="hero-left-image">
            </div>
        </section>
        <section class="features" id="features">
            <h2>Why Choose Recipeezz?</h2>
            <div class="features-grid">
                <div class="feature-item">
                    <h3>Extensive Recipe Database</h3>
                    <p>Search over 10,000 recipes by ingredients or dietary needs.</p>
                </div>
                <div class="feature-item">
                    <h3>Meal Planning Made Easy</h3>
                    <p>Build your weekly meal plans with our intuitive interface.</p>
                </div>
                <div class="feature-item">
                    <h3>Smart Shopping Lists</h3>
                    <p>Automatically generate shopping lists from your meal plans.</p>
                </div>
            </div>
        </section>
        <section class="popular-recipes" id="popular-recipes">
            <h2> Explore Popualr Recipes !!</h2>
            <div class="popular-recipes-grid">
                <div class="recipe-card">
                    <img src="../../assets/biriyani.jpg" alt="Biriyani">
                    <div class="recipe-title"> Biriyani</div>
                </div>
                <div class="recipe-card">
                    <img src="../../assets/grill.jpg" alt="Grill Chicken">
                    <div class="recipe-title"> Grill Chicken</div>
                </div>
                <div class="recipe-card">
                    <img src="../../assets/lemonade.jpg" alt="Lemonade">
                    <div class="recipe-title"> Lemonade</div>
                </div>
            </div>
        </section>
        <section class="user-reviews" id="user-reviews">
            <h2>What Our Users Say</h2>
            <div class="reviews-grid">
                <div class="review-card">
                    <p>
                        "Recipeezz er jonne bachelor life a dal-vaat khawa lagtease nahh ar, highly recommended."
                    </p>
                    <span>- Md. Ishafil Uddin</span>
                </div>
                <div class="review-card">
                    <p>
                        "Bou ranna na korleo akhon shomoshsha nai, jejkono kichu easily er banano jay 👍"
                    </p>
                    <span>- Ishtiak Uddin</span>
                </div>
                <div class="review-card">
                    <p>"Really changed my lifestyle, highly recommended"</p>
                    <span> Hasan Mahmud</span>
                </div>
            </div>
        </section>
        <section class="about" id="about">
            <h2>About Recipeezz</h2>
            <p>
                Recipeezz is designed to be your ultimate kitchen companion. We aim to simplify the way you find recipes,
                plan your meals, and manage your grocery shopping. Our platform offers a vast collection of recipes,
                tools for meal planning, nutritional information, and much more to inspire your everyday cooking.
            </p>
        </section>
        <section class = "signup">
        <a       id    = "signup-nav"></a>
            <h2>Ready to Get Started?</h2>
            <p>
                Sign up today to unlock all the amazing features of Recipeezz and begin your journey to stress-free
                cooking!
            </p>
            <button class="button2" onclick="window.location.href='signup.html'">Sign Up Now</button>
        </section>
    </main>
    <?php require_once "footer.php"; ?>
    <!-- <script src="landing-page.js"></script> -->
</body>

</html>