<?php
// Include the database connection code
include 'db_connect.php';

// Get the productId parameter from the request
$productId = $_GET['productId'];

// Check if the product exists in the database
$query = "SELECT * FROM products WHERE id = $productId";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    // Product exists, add it to the cart table in the database
    $cartQuery = "INSERT INTO cart (productId) VALUES ($productId)";
    if (mysqli_query($conn, $cartQuery)) {
        echo "Product added to cart successfully!";
    } else {
        echo "Error adding product to cart: " . mysqli_error($conn);
    }
} else {
    echo "Product not found.";
}
?>
