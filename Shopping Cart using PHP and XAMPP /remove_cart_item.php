<?php
include 'db_connect.php';

$productId = $_GET['productId'];

// Delete the item from the cart table based on the productId
$query = "DELETE FROM cart WHERE productId = $productId";

if (mysqli_query($conn, $query)) {
    echo "Item removed from cart successfully!";
} else {
    echo "Error removing item from cart: " . mysqli_error($conn);
}
?>
