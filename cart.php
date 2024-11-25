<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart System - Food & Hotel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background: linear-gradient(45deg, #ff6f61, #ff9e80);
            color: #fff;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 24px;
            margin: 0;
        }

        header nav a {
            text-decoration: none;
            color: #fff;
            margin: 0 15px;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        header nav a:hover {
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            text-align: center;
            font-size: 24px;
            color: #ff6f61;
            margin-bottom: 20px;
        }

        .items-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .item {
            width: 48%;
            background: #f9f9f9;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .item h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .item p {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .item button {
            padding: 10px 20px;
            background-color: #ff6f61;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .item button:hover {
            background-color: #ff9e80;
        }

        .cart {
            margin-top: 30px;
            background: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            display: none;
        }

        .cart h3 {
            margin-bottom: 15px;
        }

        .cart ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .cart ul li {
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
        }

        .cart ul li:last-child {
            border-bottom: none;
        }

        .cart-total {
            font-size: 18px;
            font-weight: bold;
            margin: 15px 0;
            text-align: right;
        }

        .order-button {
            display: block;
            width: 100%;
            padding: 15px;
            font-size: 16px;
            color: #fff;
            background-color: #ff6f61;
            border: none;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .order-button:hover {
            background-color: #ff9e80;
        }
    </style>
</head>
<body>
    <header>
        <h1>Food & Stay</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="services.php">Services</a>
            <a href="cart.php">Cart</a>
        </nav>
    </header>

    <div class="container">
        <h2 class="section-title">Add Items to Cart</h2>

        <!-- Items List -->
        <div class="items-list">
            <div class="item">
                <h3>Pizza (Large)</h3>
                <p>Price: $12.99</p>
                <button onclick="addToCart('Pizza (Large)', 12.99)">Add to Cart</button>
            </div>
            <div class="item">
                <h3>Burger</h3>
                <p>Price: $9.99</p>
                <button onclick="addToCart('Burger', 9.99)">Add to Cart</button>
            </div>
            <div class="item">
                <h3>Deluxe Room</h3>
                <p>Price: $100.00/night</p>
                <button onclick="addToCart('Deluxe Room', 100.00)">Add to Cart</button>
            </div>
            <div class="item">
                <h3>Standard Room</h3>
                <p>Price: $70.00/night</p>
                <button onclick="addToCart('Standard Room', 70.00)">Add to Cart</button>
            </div>
        </div>

        <!-- Cart -->
        <div class="cart" id="cart">
            <h3>Cart Summary</h3>
            <ul id="cart-items"></ul>
            <div class="cart-total" id="cart-total">Total: $0.00</div>
            <button class="order-button" onclick="placeOrder()">Place Order</button>
        </div>
    </div>

    <script>
        const cart = [];
        const cartItemsContainer = document.getElementById("cart-items");
        const cartTotal = document.getElementById("cart-total");
        const cartSection = document.getElementById("cart");

        function addToCart(itemName, itemPrice) {
            cart.push({ name: itemName, price: itemPrice });
            updateCart();
        }

        function updateCart() {
            // Clear the cart items
            cartItemsContainer.innerHTML = "";

            // Re-render cart items
            let total = 0;
            cart.forEach((item, index) => {
                total += item.price;
                const listItem = document.createElement("li");
                listItem.innerHTML = `<span>${item.name}</span><span>$${item.price.toFixed(2)}</span>`;
                cartItemsContainer.appendChild(listItem);
            });

            // Update total and display cart
            cartTotal.textContent = `Total: $${total.toFixed(2)}`;
            cartSection.style.display = "block";
        }

        function placeOrder() {
            if (cart.length === 0) {
                alert("Your cart is empty!");
                return;
            }

            alert("Order placed successfully!");
            // Clear cart
            cart.length = 0;
            updateCart();
            cartSection.style.display = "none";
        }
    </script>
</body>
</html>
