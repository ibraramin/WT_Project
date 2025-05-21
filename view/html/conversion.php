<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
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
    <link rel = "stylesheet" href = "../css/conversion.css">
</head>
<header>
    <nav>
        <a  href  = "landing-page.html" class = "logo">Recipeezz</a>
        <ul class = "header-links">
            <li>
                <a href = "#"> Recipes</a>
            </li>
            <li>
                <a href = "#"> Category</a>
            </li>
            <li>
                <a href = "#"> Conversion</a>
            </li>
            <li>
                <a href = "#"> Season</a>
            </li>
            <li>
                <a href = "shopping.php"> Shopping</a>
            </li>
        </ul>
        <div  class = "nav-right-section">
        <div  class = "user-profile-display">
        <img  src   = "../assets/images/default-profile.png" alt = "Profile" class = "profile-image-circle">
        <div  class = "user-info">
        <span class = "username">
                            <?php echo isset($_SESSION['user_email']) ? htmlspecialchars($_SESSION['user_email']): 'User'; ?>
                        </span>
                        <a href = "profile.php" class = "profile-link-nav">View Profile</a>
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
            <h1>Conversion Calculator</h1>
            <p>Handy tools for kitchen conversions.</p>
        </div>

        <section class="dashboard-section" id="measurement-converter">
            <h2>Measurement Converter</h2>
            <div class="converter-grid">
                <div class="converter-input">
                    <label for="from-value">Value to Convert</label>
                    <input type="number" id="from-value" value="1">
                </div>
                <div class="converter-select">
                    <label for="from-unit">From</label>
                    <select id="from-unit">
                        <optgroup label="Volume">
                            <option value="ml">Milliliter (ml)</option>
                            <option value="l">Liter (l)</option>
                            <option value="floz">Fluid Ounce (fl oz)</option>
                            <option value="cup">Cup</option>
                            <option value="pint">Pint</option>
                            <option value="quart">Quart</option>
                            <option value="gallon">Gallon</option>
                        </optgroup>
                        <optgroup label="Weight">
                            <option value="g">Gram (g)</option>
                            <option value="kg">Kilogram (kg)</option>
                            <option value="oz">Ounce (oz)</option>
                            <option value="lb">Pound (lb)</option>
                        </optgroup>
                    </select>
                </div>
                <div class="converter-output">
                    <label for="to-value">Result</label>
                    <input type="text" id="to-value" readonly>
                </div>
                <div class="converter-select">
                    <label for="to-unit">To</label>
                    <select id="to-unit">
                        <optgroup label="Volume">
                            <option value="ml">Milliliter (ml)</option>
                            <option value="l">Liter (l)</option>
                            <option value="floz">Fluid Ounce (fl oz)</option>
                            <option value="cup">Cup</option>
                            <option value="pint">Pint</option>
                            <option value="quart">Quart</option>
                            <option value="gallon">Gallon</option>
                        </optgroup>
                        <optgroup label="Weight">
                            <option value="g">Gram (g)</option>
                            <option value="kg">Kilogram (kg)</option>
                            <option value="oz">Ounce (oz)</option>
                            <option value="lb">Pound (lb)</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </section>

        <section class="dashboard-section" id="serving-size-adjuster">
            <h2>Serving Size Adjuster</h2>
            <div class="adjuster-form">
                <div class="form-group">
                    <label for="original-servings">Original Servings</label>
                    <input type="number" id="original-servings" value="4">
                </div>
                <div class="form-group">
                    <label for="desired-servings">Desired Servings</label>
                    <input type="number" id="desired-servings" value="6">
                </div>
            </div>
            <table class="ingredient-table">
                <thead>
                    <tr>
                        <th>Ingredient</th>
                        <th>Quantity</th>
                        <th>Unit</th>
                        <th>Adjusted Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Flour</td>
                        <td>2</td>
                        <td>cups</td>
                        <td>3 cups</td>
                    </tr>
                    <tr>
                        <td>Sugar</td>
                        <td>1</td>
                        <td>cup</td>
                        <td>1.5 cups</td>
                    </tr>
                    <tr>
                        <td>Eggs</td>
                        <td>2</td>
                        <td>large</td>
                        <td>3 large</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="dashboard-section" id="unit-dictionary">
            <h2>Unit Dictionary</h2>
            <p>Common culinary units and their equivalents: </p>
            <table class="unit-table">
                <thead>
                    <tr>
                        <th>Unit</th>
                        <th>Abbreviation</th>
                        <th>Equivalent</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tablespoon</td>
                        <td>tbsp or T</td>
                        <td>3 teaspoons</td>
                    </tr>
                    <tr>
                        <td>Teaspoon</td>
                        <td>tsp or t</td>
                        <td>1/2 tablespoon</td>
                    </tr>
                    <tr>
                        <td>Cup</td>
                        <td>c</td>
                        <td>8 fluid ounces</td>
                    </tr>
                </tbody>
            </table>
        </section>

    </main>

    <footer class="page-footer">
        <p>&copy; 2025 Recipeezz. Made By Ibrar Amin & Soumodip Madhu</p>
    </footer>

</body>

</html>