
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEK IT Consult Computers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        /* Existing styles remain unchanged */
        /* New login modal styles */
        .login-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }

        .login-content {
            background-color: #343a40;
            margin: 15% auto;
            padding: 30px;
            width: 40%;
            border-radius: 10px;
            position: relative;
        }

        .close-login {
            color: #aaa;
            position: absolute;
            right: 25px;
            top: 15px;
            font-size: 28px;
            cursor: pointer;
        }

        .login-form input {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .login-form button {
            background: #198754;
            color: white;
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <header>TEK IT Consult Computers</header>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <!-- Added login menu item -->
            <li><a href="#" onclick="openLogin()">Login</a></li>
        </ul>
    </nav>
    
    <section id="home">
        <h2>Welcome to TEK IT Consult Computers</h2>
        <p>Your one-stop shop for cutting-edge technology and accessories.</p>
    </section>
    
    <section id="products">
        <h2>Our Products</h2>
        <div class="product-list">
<section id="products">
    <h2>Our Products</h2>
    <div class="product-list">
        <div class="product">
            <h3>Laptop</h3>
            <p>Price: $899</p>
            <button>Buy Now</button>
        </div>
        <div class="product">
            <h3>Gaming PC</h3>
            <p>Price: $1499</p>
            <button>Buy Now</button>
        </div>
        <div class="product">
            <h3>Keyboard</h3>
            <p>Price: $99</p>
            <button>Buy Now</button>
        </div>
    </div>
</section>

        </div>
    </section>
    
    <section id="about">
        <h2>About Us</h2>
        <p>Providing top-tier technology solutions for over a decade.</p>
    </section>
    
    <section id="contact">
        <h2>Contact Us</h2>
        <div class="contact-form">
            <form id="contactForm" action="contact.php" method="POST">
                <input type="text" id="name" name="name" placeholder="Your Name" required>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
                <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
            <p id="formMessage"></p>
        </div>
    </section>
    
    <!-- New login modal -->
    <div id="loginModal" class="login-modal">
        <div class="login-content">
            <span class="close-login" onclick="closeLogin()">&times;</span>
            <h2>Welcome Back!</h2>
            <form class="login-form" onsubmit="handleLogin(event)">
                <input type="email" placeholder="Email address" required>
                <input type="password" placeholder="Password" required>
                <button type="submit">Sign In</button>
                <p style="margin-top: 15px;">New user? <a href="#" style="color: #0d6efd;">Create account</a></p>
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 TEK IT Consult Computers. All rights reserved.</p>
    </footer>

    <script>
        // Login modal functions
        function openLogin() {
            document.getElementById('loginModal').style.display = 'block';
        }

        function closeLogin() {
            document.getElementById('loginModal').style.display = 'none';
        }

        // Handle login form submission
        function handleLogin(e) {
            e.preventDefault();
            alert('Login functionality would be implemented here');
            closeLogin();
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target == document.getElementById('loginModal')) {
                closeLogin();
            }
        }

        // Existing contact form script remains unchanged
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("contactForm").addEventListener("submit", function(event) {
                event.preventDefault();
                document.getElementById("formMessage").textContent = "Thank you for contacting us! We will get back to you soon.";
                this.reset();
            });
        });
    </script>
</body>
</html>
