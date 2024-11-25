<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food & Stay - Online Orders and Hotel Booking</title>
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

        header nav {
            display: flex;
            gap: 15px;
        }

        header nav a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        header nav a:hover {
            color: #333;
        }

        .hero {
            background-image: url('Room.jpg');
            opacity: 0.6;
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: #f82323;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 10px;
           
        }

        .hero h2 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
            max-width: 600px;
            margin-bottom: 20px;
        }

        .hero button {
            padding: 12px 30px;
            font-size: 18px;
            background-color: #fd594a;
            border: none;
            color: #f5ebeb;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .hero button:hover {
            background-color: #fc430b;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 40px 20px;
        }

        .feature {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .feature i {
            font-size: 50px;
            color: #ff6f61;
            margin-bottom: 15px;
        }

        .feature h3 {
            font-size: 24px;
            margin: 10px 0;
        }

        footer {
            background: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        footer a {
            color: #ff6f61;
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>Food & Stay</h1>
        <nav>
            
            <a href="Product.php">Shop</a>
            <a href="Account.php">Account</a>
            <a href="services.php">Services</a>
            <a href="Contact.php">Contact</a>
        </nav>
    </header>
    <section class="hero">

        
        <h2>Delicious Meals & Luxurious Stays</h2>
        <p>Order your favorite food and book comfortable hotel stays with ease. Fast, secure, and hassle-free.</p>
        <a href="Product.php"><button>Explore Now</button></a>
    </section>
    <section id="features" class="features">
        <div class="feature">
            <i class="fas fa-utensils"></i>
            <h3>Online Food Ordering</h3>
            <p>Order from a variety of cuisines with just a few clicks.</p>
        </div>
        <div class="feature">
            <i class="fas fa-hotel"></i>
            <h3>Hotel Booking</h3>
            <p>Find and book the best hotels at affordable prices.</p>
        </div>
        <div class="feature">
            <i class="fas fa-truck"></i>
            <h3>Fast Delivery</h3>
            <p>Enjoy quick food delivery right to your doorstep.</p>
        </div>
    </section>
    <footer>
        <p>© 2024 Food & Stay. All rights reserved. | <a href="#contact">Contact Us</a></p>
    </footer>
</body>
</html>
