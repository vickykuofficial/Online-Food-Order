<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food & Stay - Products</title>
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

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
            color: #ff6f61;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .product-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: scale(1.03);
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-details {
            padding: 15px;
            text-align: center;
        }

        .product-details h3 {
            font-size: 20px;
            margin: 10px 0;
            color: #333;
        }

        .product-details p {
            color: #666;
            margin: 10px 0;
            font-size: 16px;
        }

        .product-details .price {
            font-size: 18px;
            color: #ff6f61;
            font-weight: bold;
            margin: 10px 0;
        }

        .order-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff6f61;
            color: #fff;
            text-decoration: none;
            border-radius: 25px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .order-button:hover {
            background-color: #ff9e80;
        }

        footer {
            background: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Food & Stay</h1>
        <nav>
            <a href="services.php">Services</a>
            <a href="contact.php">Contact</a>
            <a href="Account.php">Account</a>
        </nav>
    </header>

    <div class="container">
        <!-- Food Section -->
        <section id="food">
            <h2 class="section-title">Food Categories</h2>
            <div class="products-grid">
                <div class="product-card">
                    <img src="pizza.jpg" alt="Pizza" class="product-image">
                    <div class="product-details">
                        <h3>Pizza</h3>
                        <p>Cheesy and delicious pizza with a variety of toppings.</p>
                        <p class="price">$12.99</p>
                        <a href="#" class="order-button">Order Now</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="burger.jpg" alt="Burger" class="product-image">
                    <div class="product-details">
                        <h3>Burger</h3>
                        <p>Juicy burgers with fresh ingredients and sauces.</p>
                        <p class="price">$9.99</p>
                        <a href="#" class="order-button">Order Now</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="pasta.jpg" alt="Pasta" class="product-image">
                    <div class="product-details">
                        <h3>Pasta</h3>
                        <p>Rich and creamy pasta dishes made fresh.</p>
                        <p class="price">$10.99</p>
                        <a href="#" class="order-button">Order Now</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hotels Section -->
        <section id="hotels">
            <h2 class="section-title">Hotels</h2>
            <div class="products-grid">
                <div class="product-card">
                    <img src="Luxury Hotel.jpg"alt="Luxury Hotel" class="product-image">
                    <div class="product-details">
                        <h3>Luxury Hotel</h3>
                        <p>Experience the best stay with top-notch amenities.</p>
                        <p class="price">$150/night</p>
                        <a href="#" class="order-button">Book Now</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="Hotl.jpg" alt="Budget Hotel" class="product-image">
                    <div class="product-details">
                        <h3>Budget Hotel</h3>
                        <p>Affordable and comfortable accommodations.</p>
                        <p class="price">$60/night</p>
                        <a href="#" class="order-button">Book Now</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="Beech.jpeg" alt="Resort" class="product-image">
                    <div class="product-details">
                        <h3>Beachside Resort</h3>
                        <p>Relax and unwind at our beautiful beach resort.</p>
                        <p class="price">$200/night</p>
                        <a href="#" class="order-button">Book Now</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <p>© 2024 Food & Stay. All rights reserved.</p>
    </footer>
</body>
</html>
