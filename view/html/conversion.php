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
    <link rel="stylesheet" href="../css/conversion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="dashboard-container">
        <header>
            <nav>
                <a href="dashboard.php" class="logo">Recipeezz</a>
                <ul class = "header-links">
                    <li>
                        <a href = "conversion.php ">Conversion</a>
                    </li>
                    <li>
                        <a href = "shopping.php"> Cart</a>
                    </li>
                    <li>
                        <a href = "timer.php"> Timer </a>
                    </li>
                    <li>
                        <a href = "category.php"> Category </a>
                    </li>
                </ul>
                <div class = "nav-controls">
                <ul  class = "login-signup-links">
                        <li>
                            <a href="../../controller/logout.php" class="button1"> Logout</a>
                        </li>
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
                        <input type="number" id="from-value" value="1" step="any">
                    </div>
                    <div class="converter-select">
                        <label for="from-unit">From</label>
                        <select id="from-unit">
                            <optgroup label="Volume">
                                <option value="ml">Milliliter (ml)</option>
                                <option value="l">Liter (l)</option>
                                <option value="floz">Fluid Ounce (fl oz)</option>
                                <option value="cup">Cup (US)</option>
                                <option value="pint">Pint (US)</option>
                                <option value="quart">Quart (US)</option>
                                <option value="gallon">Gallon (US)</option>
                                <option value="tbsp">Tablespoon (US)</option>
                                <option value="tsp">Teaspoon (US)</option>
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
                                <option value="cup">Cup (US)</option>
                                <option value="pint">Pint (US)</option>
                                <option value="quart">Quart (US)</option>
                                <option value="gallon">Gallon (US)</option>
                                <option value="tbsp">Tablespoon (US)</option>
                                <option value="tsp">Teaspoon (US)</option>
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

            <hr>

            <section class="dashboard-section" id="serving-size-adjuster">
                <h2>Serving Size Adjuster</h2>
                <div class="adjuster-form">
                    <div class="form-group">
                        <label for="original-servings">Original Servings</label>
                        <input type="number" id="original-servings" value="4" min="1">
                    </div>
                    <div class="form-group">
                        <label for="desired-servings">Desired Servings</label>
                        <input type="number" id="desired-servings" value="6" min="1">
                    </div>
                </div>
                <table class="ingredient-table">
                    <thead>
                        <tr>
                            <th>Ingredient</th>
                            <th>Original Quantity</th>
                            <th>Unit</th>
                            <th>Adjusted Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Flour</td>
                            <td class="original-quantity-val">2</td>
                            <td class="unit-val">cups</td>
                            <td class="adjusted-quantity-display">3 cups</td>
                        </tr>
                        <tr>
                            <td>Sugar</td>
                            <td class="original-quantity-val">1</td>
                            <td class="unit-val">cup</td>
                            <td class="adjusted-quantity-display">1.5 cups</td>
                        </tr>
                        <tr>
                            <td>Eggs</td>
                            <td class="original-quantity-val">2</td>
                            <td class="unit-val">large</td>
                            <td class="adjusted-quantity-display">3 large</td>
                        </tr>
                        <tr>
                            <td>Milk</td>
                            <td class="original-quantity-val">0.5</td>
                            <td class="unit-val">cup</td>
                            <td class="adjusted-quantity-display">0.75 cup</td>
                        </tr>
                        <tr>
                            <td>Butter</td>
                            <td class="original-quantity-val">100</td>
                            <td class="unit-val">g</td>
                            <td class="adjusted-quantity-display">150 g</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <hr>

            <section class="dashboard-section" id="unit-dictionary">
                <h2>Unit Dictionary</h2>
                <p>Common culinary units and their equivalents: </p>
                <table class="unit-table">
                    <thead>
                        <tr>
                            <th>Unit</th>
                            <th>Abbreviation</th>
                            <th>Metric Equivalent (approx.)</th>
                            <th>Imperial Equivalent (approx.)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teaspoon</td>
                            <td>tsp or t</td>
                            <td>5 ml</td>
                            <td>1/6 fl oz</td>
                        </tr>
                        <tr>
                            <td>Tablespoon</td>
                            <td>tbsp or T</td>
                            <td>15 ml</td>
                            <td>0.5 fl oz (3 tsp)</td>
                        </tr>
                        <tr>
                            <td>Fluid Ounce</td>
                            <td>fl oz</td>
                            <td>30 ml</td>
                            <td>1 fl oz (2 tbsp)</td>
                        </tr>
                        <tr>
                            <td>Cup (US)</td>
                            <td>c</td>
                            <td>237 ml</td>
                            <td>8 fl oz (16 tbsp)</td>
                        </tr>
                        <tr>
                            <td>Pint (US)</td>
                            <td>pt</td>
                            <td>473 ml</td>
                            <td>16 fl oz (2 cups)</td>
                        </tr>
                        <tr>
                            <td>Quart (US)</td>
                            <td>qt</td>
                            <td>946 ml</td>
                            <td>32 fl oz (4 cups or 2 pints)</td>
                        </tr>
                        <tr>
                            <td>Gallon (US)</td>
                            <td>gal</td>
                            <td>3.785 L</td>
                            <td>128 fl oz (16 cups or 4 quarts)</td>
                        </tr>
                        <tr>
                            <td>Ounce (weight)</td>
                            <td>oz</td>
                            <td>28.35 g</td>
                            <td>1 oz</td>
                        </tr>
                        <tr>
                            <td>Pound (weight)</td>
                            <td>lb</td>
                            <td>453.59 g</td>
                            <td>16 oz</td>
                        </tr>
                        <tr>
                            <td>Gram</td>
                            <td>g</td>
                            <td>1 g</td>
                            <td>0.035 oz</td>
                        </tr>
                        <tr>
                            <td>Kilogram</td>
                            <td>kg</td>
                            <td>1000 g</td>
                            <td>2.205 lbs</td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </main>

        <?php include "footer.php" ?>

        <script src="conversion.js"> </script>

</body>

</html>