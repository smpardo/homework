<?php
// Get the category name from form data
$category_name = $_POST['category_name'];

// Validate input
if (empty($category_name) ) {
    $error = "Invalid category data. Check fields and try again.";
    include('error.php');
} else {
    // If valid, add the product to the database
    require_once('database.php');
    $query = "INSERT INTO categories
                 (categoryName)
              VALUES
                 ('$category_name')";
    $db->exec($query);

    // Display the Product List page
    include('category_list.php');
}
?>