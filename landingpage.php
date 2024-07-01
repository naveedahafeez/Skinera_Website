<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkinEra</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #595858;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 auto;
        }

        .hero {
            background: url('imgs/banner.png') no-repeat center center/cover;
            color: #fff;
            text-align: center;
            padding: 120px 0;
        }

        .hero h2 {
            font-size: 3em;
            margin-top: 50px;
            color: #f8f9fa;
            margin-bottom: 10px;
        }

        .hero a {
            font-size: 1.2em;
            background-color: black;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .hero a:hover {
            background-color: #ff6347;
        }

        .featured-products {
            padding: 50px 0;
            background-color: lightgray;
        }

        .featured-products h2 {
            font-size: 2em;
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        .product {
            text-align: center;
            margin-bottom: 30px;
        }

        .product img {
            width: 100%;
            max-width: 300px;
            border-radius: 5px;
            height: auto;
        }

        .product h3 {
            margin-top: 10px;
            color: #333;
        }

        .product p {
            color: #666;
        }

        .product .btn {
            background-color: black;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .product .btn:hover {
            background-color: #ff6347;
        }

        .categories {
            padding: 50px 0;
            background-color: #e9ecef;
        }

        .categories h2 {
            font-size: 2em;
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        .category {
            text-align: center;
            margin-bottom: 30px;
        }

        .category img {
            width: 100%;
            max-width: 200px;
            border-radius: 5px;
            height: 150px; 
            object-fit: cover; 
            transition: transform 0.3s ease;
        }

        .category img:hover {
            transform: scale(1.05);
        }

        .category h3 {
            margin-top: 10px;
            color: white;
        }

        .category a {
            display: block;
            margin-top: 10px;
            background-color: black;
            color: #fff;
            padding: 10px 10px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .category a:hover {
            background-color: #ff6347;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <section class="hero">
        <div>
            <h2>Welcome to SkinEra</h2>
            <p>Your one-stop solution for all skincare needs.</p>
            <a href="#products" class="btn">Shop Now</a>
        </div>
    </section>

    <section class="categories">
        <h2>Shop by Category</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4 category">
                    <a href="cosmetic.php">
                        <img src="imgs/images-53.jpeg" alt="Cosmetics">
                        <h3>Cosmetics</h3>
                    </a>
                </div>
                <div class="col-md-4 category">
                    <a href="mens.php">
                        <img src="imgs/menskincare.jpeg" alt="Men">
                        <h3>Men</h3>
                    </a>
                </div>
                <div class="col-md-4 category">
                    <a href="womens.php">
                        <img src="imgs/womenskin.jpeg" alt="Women">
                        <h3>Women</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="products" class="featured-products">
        <h2>Featured Most Selling Products</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4 product">
                    <img src="imgs/six.png" alt="Men's Gift Kit">
                    <h3>Men's Gift Kit</h3>
                    <p>Rs. 2,500</p>
                    <button class="btn" onclick="addToCart('Men\'s Gift Kit', 2500)">Add to Cart</button>
                </div>
                <div class="col-md-4 product">
                    <img src="imgs/seven.png" alt="Humanrace Routine Pack">
                    <h3>Humanrace Routine Pack</h3>
                    <p>Rs. 3,200</p>
                    <button class="btn" onclick="addToCart('Humanrace Routine Pack', 3200)">Add to Cart</button>
                </div>
                <div class="col-md-4 product">
                    <img src="imgs/two.png" alt="Glow Serum">
                    <h3>Glow Serum</h3>
                    <p>Rs. 1,800</p>
                    <button class="btn" onclick="addToCart('Glow Serum', 1800)">Add to Cart</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 product">
                    <img src="imgs/4.png" alt="Hydration Cream">
                    <h3>Hydration Cream</h3>
                    <p>Rs. 2,200</p>
                    <button class="btn" onclick="addToCart('Hydration Cream', 2200)">Add to Cart</button>
                </div>
                <div class="col-md-4 product">
                    <img src="imgs/five.png" alt="Sun Protection Lotion">
                    <h3>Sun Protection Lotion</h3>
                    <p>Rs. 1,500</p>
                    <button class="btn" onclick="addToCart('Sun Protection Lotion', 1500)">Add to Cart</button>
                </div>
                <div class="col-md-4 product">
                    <img src="imgs/nine.png" alt="Revitalizing Night Cream">
                    <h3>Revitalizing Night Cream</h3>
                    <p>Rs. 2,800</p>
                    <button class="btn" onclick="addToCart('Revitalizing Night Cream', 2800)">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
    <script>
        function addToCart(productName, productPrice) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let product = cart.find(item => item.name === productName);
            if (product) {
                product.quantity += 1;
            } else {
                cart.push({ name: productName, price: productPrice, quantity: 1 });
            }
            localStorage.setItem('cart', JSON.stringify(cart));
            alert(`${productName} has been added to your cart.`);
        }
    </script>
</body>
</html>
