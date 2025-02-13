<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEK IT Consult Computers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1e1e1e;
            color: white;
        }
        header {
            background: #0d6efd;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
        }
        nav {
            background: #212529;
            padding: 10px 0;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 20px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }
        section {
            padding: 60px;
            text-align: center;
        }
        .product-list {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }
        .product {
            background: #f8f9fa;
            padding: 20px;
            box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            border-radius: 10px;
            width: 280px;
            color: black;
        }
        .product button {
            background: #198754;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .contact-form {
            background: #343a40;
            padding: 30px;
            width: 50%;
            margin: auto;
            border-radius: 10px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }
        .contact-form button {
            width: 100%;
            background: #0d6efd;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        footer {
            background: #212529;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
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
        </ul>
    </nav>
    
    <section id="home">
        <h2>Welcome to TEK IT Consult Computers</h2>
        <p>Your one-stop shop for cutting-edge technology and accessories.</p>
    </section>
    
    <section id="products">
        <h2>Our Products</h2>
        <div class="product-list">
            <?php
                $products = [
                    ["name" => "Laptop", "price" => "$899"],
                    ["name" => "Gaming PC", "price" => "$1499"],
                    ["name" => "Keyboard", "price" => "$99"]
                ];
                foreach ($products as $product) {
                    echo "<div class='product'>
                            <h3>" . htmlspecialchars($product['name']) . "</h3>
                            <p>Price: " . htmlspecialchars($product['price']) . "</p>
                            <button>Buy Now</button>
                          </div>";
                }
            ?>
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
    
    <footer>
        <p>&copy; 2024 TEK IT Consult Computers. All rights reserved.</p>
    </footer>
    
    <script>
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
