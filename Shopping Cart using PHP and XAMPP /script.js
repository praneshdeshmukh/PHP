
// Define an array to store the cart items
var cartItems = [];

function addToCart(productId) {
    // Send an AJAX request to the server to add the product to the cart
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert("Product added to cart successfully!");

            // Increment the cart count
            var cartCount = document.getElementById("cart-count");
            var count = parseInt(cartCount.innerHTML);
            cartCount.innerHTML = count + 1;

            // Fetch the added item from the server and add it to the cartItems array
            fetchCartItem(productId);
        }
    };
    xhttp.open("GET", "add_to_cart.php?productId=" + productId, true);
    xhttp.send();
}

function fetchCartItem(productId) {
    // Send an AJAX request to fetch the added item from the server
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var cartItem = JSON.parse(this.responseText);

            // Add the fetched item to the cartItems array
            cartItems.push(cartItem);

            // Display the cart items
            displayCartItems();
        }
    };
    xhttp.open("GET", "get_cart_item.php?productId=" + productId, true);
    xhttp.send();
}

function displayCartItems() {
    var cartItemsElement = document.getElementById("cart-items");
    cartItemsElement.innerHTML = "";

    // Loop through the cartItems array and create rows for each item in the table
    cartItems.forEach(function(item) {
        var row = document.createElement("tr");
        var nameCell = document.createElement("td");
        var priceCell = document.createElement("td");
        var removeCell = document.createElement("td");
        var removeButton = document.createElement("button");

        nameCell.innerHTML = item.name;
        priceCell.innerHTML = "$" + item.price;
        removeButton.innerHTML = "Remove";
        removeButton.onclick = function() {
            removeCartItem(item.id);
        };

        row.appendChild(nameCell);
        row.appendChild(priceCell);
        removeCell.appendChild(removeButton);
        row.appendChild(removeCell);

        cartItemsElement.appendChild(row);
    });
}

function removeCartItem(productId) {
    // Send an AJAX request to remove the item from the cart
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert("Item removed from cart successfully!");

            // Remove the item from the cartItems array
            cartItems = cartItems.filter(function(item) {
                return item.id !== productId;
            });

            // Update the displayed cart items
            displayCartItems();
        }
    };
    xhttp.open("GET", "remove_cart_item.php?productId=" + productId, true);
    xhttp.send();
}

function showCart() {
    var modal = document.getElementById("cart-modal");
    modal.style.display = "block";
}

function closeCart() {
    var modal = document.getElementById("cart-modal")
    // modal.style.height= "60px";
    // modal.style.width= 120+'px';
    modal.style.display = "none";
}

// Close the cart modal when the user clicks outside of it
window.onclick = function(event) {
    var modal = document.getElementById("cart-modal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

