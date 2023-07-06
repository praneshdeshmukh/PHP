<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipcart Clone</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <div class="log">
                    <img src="logo.png" width="80px" alt="" /> <br />
                    <div class="text">
                        <a href=""><i>Explore</i></a> <br />
                        <span>Plus!</span>
                        <img src="logo2.png" alt="" class="plus" />
                    </div>
                </div>

                <input type="text" class="type" />
                <button class="icon" type="submit" fdprocessedid="qy2js8"><svg width="20" height="20"
                        viewBox="0 0 17 18" class="" xmlns="http://www.w3.org/2000/svg">
                        <g fill="#2874F1" fill-rule="evenodd">
                            <path class="_34RNph"
                                d="m11.618 9.897l4.225 4.212c.092.092.101.232.02.313l-1.465 1.46c-.081.081-.221.072-.314-.02l-4.216-4.203">
                            </path>
                            <path class="_34RNph"
                                d="m6.486 10.901c-2.42 0-4.381-1.956-4.381-4.368 0-2.413 1.961-4.369 4.381-4.369 2.42 0 4.381 1.956 4.381 4.369 0 2.413-1.961 4.368-4.381 4.368m0-10.835c-3.582 0-6.486 2.895-6.486 6.467 0 3.572 2.904 6.467 6.486 6.467 3.582 0 6.486-2.895 6.486-6.467 0-3.572-2.904-6.467-6.486-6.467">
                            </path>
                        </g>
                    </svg></button>
                <div class="login">
                    <div class="contact">
                        <ul>
                            <li><a href="" target="_blank">Home</a></li>
                            <li><a href="about.php" target="about.php">About</a></li>
                            <li><a href="contact.php" target="contact.php">Contact</a></li>
                            <li><a href="help.php" target="help.php">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>


        </nav>
    </header>
    <!-- <h1>Product Catalog</h1> -->


    <div class="container">
        <div class="wrapper">
            <?php
            // Include the database connection code
            include 'db_connect.php';

            // Fetch products from the database
            $query = "SELECT * FROM products";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="product">';
                    echo '<img src="' . $row['image'] . '" alt="' . $row['name'] . '">';
                    echo '<h3>' . $row['name'] . '</h3>';
                    echo '<p>' . $row['code'] . '</p>';
                    echo '<p>Price: $' . $row['price'] . '</p>';
                    echo '<button onclick="addToCart(' . $row['id'] . ')">Add to Cart</button>';
                    echo '</div>';
                }
            } else {
                echo '<p>No products found.</p>';
            }
            ?>
        </div>
        

    </div>

    <div class="cartItem">    
        <div id="cart-icon" onclick="showCart()">
        <img src="shopping-cart.png" width="30" alt="Cart">
        <span id="cart-count">0</span>
    </div>
    <div id="cart-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeCart()">&times;</span>
            <h2>Shopping Cart</h2>
            <center>
            <table border="1">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="cart-items">
                    <!-- Cart items will be dynamically added here -->
                </tbody>
            </table>
            </center>
        </div>
    </div>
    </div>
    <script src="script.js"></script>
</body>

</html>
