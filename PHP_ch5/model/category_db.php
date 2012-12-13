<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $result = $db->query($query);
    return $result;
} // end get_categories

function get_category_name($category_id) {
    global $db;
    $query = "SELECT * FROM categories
              WHERE categoryID = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['categoryName'];
    return $category_name;
} // end get_category_name

function add_category($category_name) {

	global $db;

	// add the product to the database
	$query = "INSERT INTO categories (categoryName)
			  VALUES ('$category_name')";
	$result = $db->exec($query);

	return $result;
}// end add_gategory

function delete_category($category_id) {
	
	global $db;
	
	// Delete the category from the database
	$query = "DELETE FROM categories WHERE categoryID = '$category_id'";
	
	$result = $db->exec($query);
	
	return $result;
	
} // end delete_category

	
	
?>