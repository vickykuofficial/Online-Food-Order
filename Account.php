<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #f0f4f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 450px;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
            box-sizing: border-box;
        }

        .form-group input[type="password"] {
            font-size: 16px;
        }

        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }

        .form-group button {
            width: 100%;
            padding: 12px;
            background: #007bff;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .form-group button:hover {
            background: #0056b3;
        }

        .toggle-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #007bff;
            cursor: pointer;
        }

        .toggle-link:hover {
            text-decoration: underline;
        }

        .form-container {
            display: none;
        }

        .form-container.active {
            display: block;
        }

        .icon-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .icon-container i {
            font-size: 50px;
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Login Form -->
    <div id="login-form" class="form-container active">
        <div class="icon-container">
            <i class="fa fa-user"></i>
        </div>
        <h2>Login</h2>
        <form id="login-form-element">
            <div class="form-group">
                <input type="text" id="login-email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" id="login-password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
        </form>
        <div class="toggle-link" onclick="toggleForm()">Don't have an account? Sign Up</div>
    </div>

    <!-- Signup Form -->
    <div id="signup-form" class="form-container">
        <div class="icon-container">
            <i class="fa fa-user-plus"></i>
        </div>
        <h2>Sign Up</h2>
        <form id="signup-form-element">
            <div class="form-group">
                <input type="text" id="signup-name" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <input type="email" id="signup-email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" id="signup-password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit">Sign Up</button>
            </div>
        </form>
        <div class="toggle-link" onclick="toggleForm()">Already have an account? Login</div>
    </div>
</div>

<script>
    // Toggle between Login and Signup forms
    function toggleForm() {
        const loginForm = document.getElementById("login-form");
        const signupForm = document.getElementById("signup-form");
        loginForm.classList.toggle("active");
        signupForm.classList.toggle("active");
    }

    // Handle Login Form submission (mock)
    document.getElementById("login-form-element").addEventListener("submit", function(event) {
        event.preventDefault();
        const email = document.getElementById("login-email").value;
        const password = document.getElementById("login-password").value;

        // Here, you would make an AJAX call to verify user credentials from the database
        console.log("Logging in with", email, password);
        alert("Logged in successfully!");
    });

    // Handle Signup Form submission (mock)
    document.getElementById("signup-form-element").addEventListener("submit", function(event) {
        event.preventDefault();
        const name = document.getElementById("signup-name").value;
        const email = document.getElementById("signup-email").value;
        const password = document.getElementById("signup-password").value;

        // Here, you would make an AJAX call to store user information in the database
        console.log("Signing up with", name, email, password);
        alert("Signed up successfully!");
    });
</script>

</body>
</html>
