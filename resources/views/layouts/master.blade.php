<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon-like Product Page</title>
    <style>
        .a_tdbr {
            border: 1px dashed red;
        }
        header {
            height: 98px;
            background-color: #131921;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        main {
            padding: 20px;
            background-color: #FFFFFF;
        }
        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product-images, .product-details, .purchase-options {
            border: 1px solid #ddd;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .product-images {
            flex: 2;
            text-align: center;
        }
        .product-images img {
            max-width: 100%;
            height: auto;
        }
        .product-details {
            flex: 3;
        }
        .purchase-options {
            flex: 1;
        }
        footer {
            background-color: #232F3E;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        .footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 20px;
        }
        .footer-links a {
            color: #fff;
            text-decoration: none;
        }
        .footer-links a:hover {
            text-decoration: underline;
        }
        .footer-contact, .footer-social {
            margin-bottom: 10px;
        }
        .footer-social a {
            color: #fff;
            margin: 0 10px;
            font-size: 20px;
            text-decoration: none;
        }
        .footer-social a:hover {
            text-decoration: underline;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   <div class="container-fluid a_tdbr">
        <header class="a_tdbr">Header</header>
        <main>
            <div class="product-container">
                <div class="product-images">
                    <img src="https://i.blogs.es/718a10/img_2085/500_333.jpeg" alt="Product Image">
                </div>
                <div class="product-details">
                    <h1>Iphone 15</h1>
                    <p>Iphone: <a href="#">Iphone 15</a></p>
                    <p>Ratings: ⭐⭐⭐⭐☆ (4.5 out of 5)</p>
                    <hr>
                    <h2>$99.99</h2>
                    <p>DYNAMIC ISLAND COMES TO IPHONE 15 — Dynamic Island bubbles up alerts and Live Activities — so you don’t miss them while you’re doing something else. You can see who’s calling, track your next ride, check your flight status, and so much more.</p>
                    <ul>
                        <li>Feature 1</li>
                        <li>Feature 2</li>
                        <li>Feature 3</li>
                    </ul>
                </div>
                <div class="purchase-options">
                    <h3>Buy Now</h3>
                    <p>Price: $99.99</p>
                    <button class="btn btn-primary btn-block">Add to Cart</button>
                    <button class="btn btn-secondary btn-block">Buy Now</button>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer-links">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Contact</a>
            </div>
            <div class="footer-contact">
                <p>1234 Street Name, City, State 12345</p>
                <p>Email: info@example.com | Phone: (123) 456-7890</p>
            </div>
            <div class="footer-social">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
            <p>&copy; 2024 Your Company. All rights reserved.</p>
        </footer>
   </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.js"></script>
</body>
</html>
