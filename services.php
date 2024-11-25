<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food & Stay - Services</title>
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

        .hero {
            background: linear-gradient(135deg, #ff9e80, #ff6f61);
            color: #fff;
            text-align: center;
            padding: 60px 20px;
        }

        .hero h2 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 18px;
            max-width: 700px;
            margin: 10px auto;
        }

        .services-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            color: #ff6f61;
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .service-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            padding: 20px;
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-card i {
            font-size: 50px;
            color: #ff6f61;
            margin-bottom: 15px;
        }

        .service-card h3 {
            font-size: 22px;
            margin: 10px 0;
        }

        .service-card p {
            font-size: 16px;
            color: #666;
            margin: 10px 0;
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
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
            <a href="index.php">Home</a>
            <a href="services.php">Services</a>
            <a href="Contact.php">Contact</a>
        </nav>
    </header>

    <div class="hero">
        <h2>Our Services</h2>
        <p>We offer a range of high-quality services to make your experience unforgettable, from mouthwatering meals to luxurious hotel stays.</p>
    </div>

    <div class="services-container">
        <h2 class="section-title">What We Offer</h2>
        <div class="service-grid">
            <div class="service-card">
                <i class="fas fa-utensils"></i>
                <h3>Online Food Ordering</h3>
                <p>Order your favorite dishes from top restaurants and enjoy fast delivery right to your doorstep.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-hotel"></i>
                <h3>Hotel Booking</h3>
                <p>Find and book hotels with top-notch amenities at the best prices. Easy, secure, and fast.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-truck"></i>
                <h3>Fast Delivery</h3>
                <p>Our dedicated delivery partners ensure your food arrives fresh and hot, wherever you are.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-star"></i>
                <h3>Luxury Experiences</h3>
                <p>Book premium stays and indulge in luxurious facilities for a memorable getaway.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-users"></i>
                <h3>Customer Support</h3>
                <p>We provide 24/7 support to help with your orders and bookings, ensuring a smooth experience.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-cocktail"></i>
                <h3>Event Catering</h3>
                <p>Planning an event? Get customized food packages delivered with perfection.</p>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2024 Food & Stay. All rights reserved. | <a href="#contact">Contact Us</a></p>
    </footer>
</body>
</html>
