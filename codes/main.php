<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="body.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color:black;
            color: #fff;
            padding: 10px 0;
        }

        .navbar-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .menu-item {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .menu-item li {
            display: inline;
        }

        .menu-item li a {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
        }

        .menu-item li a:hover {
            background-color: #555;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .about-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }

        .about-text {
            flex: 1;
            padding-right: 20px;
        }

        .about-text h2 {
            margin-top: 0;
        }

        .about-img img {
            max-width: 100%;
            border-radius: 10px;
        }

        #item {
            background-color: #f9f9f9;
            padding: 20px 0;
        }

        .types-of-item {
            text-align: center;
            margin-bottom: 20px;
        }

        .item-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .item-type {
            flex: 0 0 calc(33.333% - 20px);
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(243, 239, 239, 0.1);
            margin-bottom: 20px;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .img-container {
            position: relative;
        }

        .img-container img {
            width: 100%;
            height: auto;
        }

        .discount-tag {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #ff0000;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
        }

        .img-content {
            padding: 15px;
            text-align: center;
        }

        .img-content h4,
        .img-content h3 {
            margin: 10px 0;
        }

        .img-content .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .img-content .btn:hover {
            background-color: #0056b3;
        }

        .contact-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .contact-img img {
            max-width: 100%;
            border-radius: 10px;
        }

        .form-container {
            flex: 1;
            padding-left: 20px;
        }

        .form-container h2 {
            margin-top: 0;
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-container .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .form-container .btn:hover {
            background-color: #0056b3;
        }

        .footer-area {
            background-color: #050505;
            color: #fff;
            padding: 50px 0;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <nav class="navbar">
        <div class="navbar-container container">
            <ul class="menu-item">
                <li><a href="new.php">NEW-ARRIVAL</a></li>
                <li><a href="mens.php">MEN</a></li>
                <li><a href="womens.php">WOMEN</a></li>
                <li><a href="cosmetic.php">Cosmetic</a></li>
                <li><a href="deals.php">SPECIAL-deals</a></li>
            </ul>
        </div>
    </nav>
    <section id="about">
        <div class="about-wrapper container">
            <div class="about-text">
                <h2>SKINERA</h2>
                <p>
                    SkINEra is a revolutionary skincare brand dedicated to enhancing the health and beauty of your skin.
                    With a commitment to science-backed formulations and premium ingredients, SkINEra offers a comprehensive range of skincare products designed to address various skin concerns and cater to diverse skin types.
                    Discover the confidence that comes with a skincare routine tailored to your needs, backed by the expertise and innovation of SkINEra.
                    Welcome to a new era of skincare. Welcome to SkINEra.
                </p>
            </div>
            <div class="about-img">
                <img src="imgs/about.jpg" alt="About SKINERA">
            </div>
        </div>
    </section>

    <section id="item">
        <h2 class="types-of-item">New COLLECTION</h2>
        <div class="item-container container">
            <!-- Existing Products -->
            <div class="item-type">
                <div class="img-container">
                    <img src="imgs/images-16.jpeg" alt="Product Image">
                    <div class="discount-tag">30% OFF</div>
                </div>
                <div class="img-content">
                    <h3>Mens Beard Oil</h3>
                    <h4>PKR 1300</h4>
                    <a href="#" class="btn" onclick="addToCart('Mens Beard Oil', 1300)">Add to Cart</a>
                </div>
            </div>
            <div class="item-type">
                <div class="img-container">
                    <img src="imgs/images-17.jpeg" alt="Product Image">
                    <div class="discount-tag">25% OFF</div>
                </div>
                <div class="img-content">
                    <h3>Brecell Shampoo</h3>
                    <h4>PKR 2500</h4>
                    <a href="#" class="btn" onclick="addToCart('Brecell Shampoo', 2500)">Add to Cart</a>
                </div>
            </div>
            <div class="item-type">
                <div class="img-container">
                    <img src="imgs/images-18.jpeg" alt="Product Image">
                    <div class="discount-tag">20% OFF</div>
                </div>
                <div class="img-content">
                    <h3>Cera Ve Kit</h3>
                    <h4>PKR 2700</h4>
                    <a href="#" class="btn" onclick="addToCart('Cera Ve Kit', 2700)">Add to Cart</a>
                </div>
            </div>
            <!-- Additional Products -->
            <div class="item-type">
                <div class="img-container">
                    <img src="imgs/images-19.jpeg" alt="Product Image">
                    <div class="discount-tag">15% OFF</div>
                </div>
                <div class="img-content">
                    <h3>Breccel Shampoo</h3>
                    <h4>PKR 2500</h4>
                    <a href="#" class="btn" onclick="addToCart('Breccel Shampoo', 2500)">Add to Cart</a>
                </div>
            </div>
            <div class="item-type">
                <div class="img-container">
                    <img src="imgs/images-20.jpeg" alt="Product Image">
                    <div class="discount-tag">10% OFF</div>
                </div>
                <div class="img-content">
                    <h3>Women Care Kit</h3>
                    <h4>PKR 2450</h4>
                    <a href="#" class="btn" onclick="addToCart('Women Care Kit', 2450)">Add to Cart</a>
                </div>
            </div>
            <div class="item-type">
                <div class="img-container">
                    <img src="imgs/images-21.jpeg" alt="Product Image">
                    <div class="discount-tag">5% OFF</div>
                </div>
                <div class="img-content">
                    <h3>Waera Kit Pack</h3>
                    <h4>PKR 3600</h4>
                    <a href="#" class="btn" onclick="addToCart('Waera Kit Pack', 3600)">Add to Cart</a>
                </div>
            </div>
            <div class="item-type">
                <div class="img-container">
                    <img src="imgs/images-22.jpeg" alt="Product Image">
                    <div class="discount-tag">20% OFF</div>
                </div>
                <div class="img-content">
                    <h3>Dove Kit</h3>
                    <h4>PKR 4000</h4>
                    <a href="#" class="btn" onclick="addToCart('Dove Kit', 4000)">Add to Cart</a>
                </div>
            </div>
            <div class="item-type">
                <div class="img-container">
                    <img src="imgs/images-23.jpeg" alt="Product Image">
                    <div class="discount-tag">10% OFF</div>
                </div>
                <div class="img-content">
                    <h3>Mellics Kit</h3>
                    <h4>PKR 1500</h4>
                    <a href="#" class="btn" onclick="addToCart('Mellics Kit', 1500)">Add to Cart</a>
                </div>
            </div>
            <div class="item-type">
                <div class="img-container">
                    <img src="imgs/images-24.jpeg" alt="Product Image">
                    <div class="discount-tag">25% OFF</div>
                </div>
                <div class="img-content">
                    <h3>Geologica Kit</h3>
                    <h4>PKR 1550</h4>
                    <a href="#" class="btn" onclick="addToCart('Geologica Kit', 1550)">Add to Cart</a>
                </div>
            </div>
            <div class="item-type">
                <div class="img-container">
                    <img src="imgs/images-29.jpeg" alt="Product Image">
                    <div class="discount-tag">15% OFF</div>
                </div>
                <div class="img-content">
                    <h3>Rituals</h3>
                    <h4>PKR 1800</h4>
                    <a href="#" class="btn" onclick="addToCart('Rituals', 1800)">Add to Cart</a>
                </div>
            </div>
            <div class="item-type">
                <div class="img-container">
                    <img src="imgs/images-25.jpeg" alt="Product Image">
                    <div class="discount-tag">5% OFF</div>
                </div>
                <div class="img-content">
                    <h3>Mocs</h3>
                    <h4>PKR 1950</h4>
                    <a href="#" class="btn" onclick="addToCart('Mocs', 1950)">Add to Cart</a>
                </div>
            </div>
            <div class="item-type">
                <div class="img-container">
                    <img src="imgs/images-28.jpeg" alt="Product Image">
                    <div class="discount-tag">10% OFF</div>
                </div>
                <div class="img-content">
                    <h3>Bullish Kicker</h3>
                    <h4>PKR 2050</h4>
                    <a href="#" class="btn" onclick="addToCart('Bullish Kicker', 2050)">Add to Cart</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="contact-container container">
            <div class="contact-img">
                <img src="imgs/finallogo.png" alt="Contact Image">
            </div>
            <div class="form-container">
                <h2>Contact Us</h2>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <textarea placeholder="Type your message here"></textarea>
                <a href="landingpage.php" class="btn">Submit</a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
        function addToCart(productName, productPrice) {
            // Function to handle adding product to cart
            console.log(`Added ${productName} with price ${productPrice} to cart`);
        }
    </script>
</body>

</html>
