<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkINEra</title>
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
            padding: 0 20px;
        }



        .hero {
            background-image: url('imgs/banner.png');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 100px 0;
        }

        .hero h2 {
            font-size: 3em;
            margin-top: 50px;
            color:#f8f9fa;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .featured-products {
            padding: 50px 0;
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
            background-color: #28a745;
            color: #fff;
        }

        .product .btn:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
<?php include 'header.php'; ?>
   
    <section class="hero">
        <div>
            <h2>Welcome to Our Store</h2>
      
            <a href="main.php" class="btn">Shop Now</a>
        </div>
    </section>
    <section class="featured-products">
        <h2>Featured Most Selling Products</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4 product">
                    <img src="./imgs/six.png" alt="Men's Gift Kit">
                    <h3>Men's Gift Kit</h3>
                    <p>Rs. 2,500</p>
                    <a href="checkout.php?product=mens-gift-kit&price=2500" class="btn">Add to Cart</a>
                </div>
                <div class="col-md-4 product">
                    <img src="imgs/seven.png" alt="Humanrace Routine Pack">
                    <h3>Humanrace Routine Pack</h3>
                    <p>Rs. 3,200</p>
                    <a href="checkout.php?product=humanrace-routine-pack&price=3200" class="btn">Add to Cart</a>
                </div>
                <div class="col-md-4 product">
                    <img src="imgs/two.png" alt="Glow Serum">
                    <h3>Glow Serum</h3>
                    <p>Rs. 1,800</p>
                    <a href="checkout.php?product=glow-serum&price=1800" class="btn">Add to Cart</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 product">
                    <img src="imgs/4.png" alt="Hydration Cream">
                    <h3>Hydration Cream</h3>
                    <p>Rs. 2,200</p>
                    <a href="checkout.php?product=hydration-cream&price=2200" class="btn">Add to Cart</a>
                </div>
                <div class="col-md-4 product">
                    <img src="imgs/five.png" alt="Sun Protection Lotion">
                    <h3>Sun Protection Lotion</h3>
                    <p>Rs. 1,500</p>
                    <a href="checkout.php?product=sun-protection-lotion&price=1500" class="btn">Add to Cart</a>
                </div>
                <div class="col-md-4 product">
                    <img src="imgs/nine.png" alt="Revitalizing Night Cream">
                    <h3>Revitalizing Night Cream</h3>
                    <p>Rs. 2,800</p>
                    <a href="checkout.php?product=revitalizing-night-cream&price=2800" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>

</html>
