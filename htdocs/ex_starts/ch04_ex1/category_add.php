<?php
// Get the product data
$categoryName = filter_input(INPUT_POST, 'name');

// Validate inputs
if ($categoryName == null) {
    $error = $categoryName;
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO categories
                 (categoryName)
              VALUES
                 (:category_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_name', $categoryName);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('category_list.php');
}
?>