<?php

function getAllRecipes($conn)
{
    $sql  = "SELECT id, Title, Instructions, Image_Name, Cleaned_Ingredients, cuisine, category FROM recipes";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        error_log("Error preparing statement for getAllRecipes: " . $conn->error);
        return [];
    }
    $stmt->execute();
    $result  = $stmt->get_result();
    $recipes = [];
    while ($row = $result->fetch_assoc()) {
        $recipes[] = $row;
    }
    $stmt->close();
    return $recipes;
}

function getRecipeById($conn, $id)
{
    $sql  = "SELECT id, Title, Instructions, Image_Name, Cleaned_Ingredients, cuisine, category FROM recipes WHERE id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        error_log("Error preparing statement for getRecipeById: " . $conn->error);
        return null;
    }
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $recipe = $result->fetch_assoc();
    $stmt->close();
    return $recipe;
}

function getRecipesByName($conn, $recipeName)
{
    $searchTerm = "%" . $recipeName . "%";
    $sql = "SELECT id, Title, Instructions, Image_Name, Cleaned_Ingredients, cuisine, category FROM recipes WHERE Title LIKE ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        error_log("Error preparing statement for getRecipesByName: " . $conn->error);
        return [];
    }
    $stmt->bind_param('s', $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();
    $recipes = [];
    while ($row = $result->fetch_assoc()) {
        $recipes[] = $row;
    }
    $stmt->close();
    return $recipes;
}


function getRecipesByIngredients($conn, $ingredientSearchTerm)
{
    $searchTerm = "%" . $ingredientSearchTerm . "%";
    $sql = "SELECT id, Title, Instructions, Image_Name, Cleaned_Ingredients, cuisine, category FROM recipes WHERE Cleaned_Ingredients LIKE ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        error_log("Error preparing statement for getRecipesByIngredients: " . $conn->error);
        return [];
    }
    $stmt->bind_param('s', $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();
    $recipes = [];
    while ($row = $result->fetch_assoc()) {
        $recipes[] = $row;
    }
    $stmt->close();
    return $recipes;
}

function getRecipesByCuisine($conn, $cuisineName)
{
    $searchTerm = "%" . $cuisineName . "%";
    $sql = "SELECT id, Title, Instructions, Image_Name, Cleaned_Ingredients, cuisine, category FROM recipes WHERE cuisine LIKE ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        error_log("Error preparing statement for getRecipesByCuisine: " . $conn->error);
        return [];
    }
    $stmt->bind_param('s', $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();
    $recipes = [];
    while ($row = $result->fetch_assoc()) {
        $recipes[] = $row;
    }
    $stmt->close();
    return $recipes;
}

function getRecipesByCategory($conn, $categoryName)
{
    $searchTerm = "%" . $categoryName . "%";
    $sql = "SELECT id, Title, Instructions, Image_Name, Cleaned_Ingredients, cuisine, category FROM recipes WHERE category LIKE ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        error_log("Error preparing statement for getRecipesByCategory: " . $conn->error);
        return [];
    }
    $stmt->bind_param('s', $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();
    $recipes = [];
    while ($row = $result->fetch_assoc()) {
        $recipes[] = $row;
    }
    $stmt->close();
    return $recipes;
}
