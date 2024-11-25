<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food & Stay - Contact Us</title>
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

        .contact-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-container h3 {
            text-align: center;
            color: #ff6f61;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .contact-details {
            margin-bottom: 30px;
        }

        .contact-details p {
            font-size: 18px;
            margin: 10px 0;
            line-height: 1.6;
        }

        .contact-details i {
            margin-right: 10px;
            color: #ff6f61;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
        }

        .contact-form label {
            font-size: 16px;
            margin: 10px 0 5px;
        }

        .contact-form input, .contact-form textarea {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            width: 100%;
        }

        .contact-form textarea {
            resize: vertical;
            height: 100px;
        }

        .contact-form button {
            padding: 12px 30px;
            font-size: 16px;
            color: #fff;
            background-color: #ff6f61;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #ff9e80;
        }

        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
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
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <div class="hero">
        <h2>Contact Us</h2>
        <p>Have questions or need assistance? We're here to help!</p>
    </div>

    <div class="contact-container">
        <h3>Get in Touch</h3>
        <div class="contact-details">
            <p><i class="fas fa-user"></i> Owner: Vicky</p>
            <p><i class="fas fa-envelope"></i> Email: <a href="mailto:vicky1@gmx.com">vicky1@gmx.com</a></p>
            <p><i class="fas fa-phone"></i> Phone: <a href="tel:+8810547493">8810547493</a></p>
        </div>

        <form class="contact-form" action="#" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
            
            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
            
            <label for="message">Your Message:</label>
            <textarea id="message" name="message" placeholder="Write your message here" required></textarea>
            
            <button type="submit">Send Message</button>
        </form>
    </div>

    <footer>
        <p>© 2024 Food & Stay. All rights reserved. | <a href="https://wa.me/918810547493">Contact Us</a></p>
    </footer>
</body>
</html>
