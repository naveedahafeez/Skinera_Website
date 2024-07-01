<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Arrivals</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.js"></script>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff;
        }

        .header {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header .logo h1 {
            margin: 0;
        }

        .navbar {
            background-color: #000;
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

        .footer {
            background-color: #000;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .product {
            background-color: #fff;
            padding: 20px;
            margin: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: calc(50% - 40px);
            box-sizing: border-box;
            text-align: center;
        }

        .product img {
            max-width: 100%;
            height: auto;
        }

        .product h3,
        .product p {
            margin: 10px 0;
        }

        .product button {
            display: block;
            margin: 10px auto 0;
            padding: 10px 20px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .product button:hover {
            background-color: #ff6347; 
            color: #fff;
        }

        .HEADING {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <section>
        <div class="HEADING">
            <h1>NEW ARRIVALS</h1>
        </div>
        <div class="container">
            <div class="product">
                <img src="imgs/10.png" alt="Product 1">
                <h3>skin care kit </h3>
                <p>PKR 7000</p>
                <button onclick="addToCart('Product Name 1', 4000)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/4.png" alt="Product 2">
                <h3>Himaliya Cream</h3>
                <p>PKR 4500</p>
                <button onclick="addToCart('Product Name 2', 4500)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/eight.png" alt="Product 3">
                <h3>Specail kit </h3>
                <p>PKR 80000</p>
                <button onclick="addToCart('Product Name 3', 3800)">Add to Cart</button>
            </div>
         

        <div class="container">
            <div class="product">
                <img src="imgs/images-19.jpeg" alt="Product 1">
                <h3>Bracele shampoo</h3>
                <p>PKR 4000</p>
                <button onclick="addToCart('Product Name 1', 4000)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-20.jpeg" alt="Product 2">
                <h3> Face wash </h3>
                <p>PKR 4500</p>
                <button onclick="addToCart('Product Name 2', 4500)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-21.jpeg" alt="Product 3">
                <h3>hYDRA kIT</h3>
                <p>PKR 3800</p>
                <button onclick="addToCart('Product Name 3', 3800)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-22.jpeg" alt="Product 4">
                <h3>Charcole Kit </h3>
                <p>PKR 4200</p>
                <button onclick="addToCart('Product Name 4', 4200)">Add to Cart</button>
            </div>
        </div>

        <div class="container">
            <div class="product">
                <img src="imgs/images-24.jpeg" alt="Product 1">
                <h3>Cleanser Pack</h3>
                <p>PKR 4000</p>
                <button onclick="addToCart('Product Name 1', 4000)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-23.jpeg" alt="Product 2">
                <h3>Serum Pack</h3>
                <p>PKR 4500</p>
                <button onclick="addToCart('Product Name 2', 4500)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-60.jpeg" alt="Product 3">
                <h3> Blush Kit</h3>
                <p>PKR 3800</p>
                <button onclick="addToCart('Product Name 3', 3800)">Add to Cart</button>
                </div>
            <div class="product">
                <img src="imgs/images-61.jpeg" alt="Product 4">
                <h3>Lip Balm</h3>
                <p>PKR 4200</p>
                <button onclick="addToCart('Product Name 4', 4200)">Add to Cart</button>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
    <script>
        function addToCart(productName, price) {
            alert("Added " + productName + " to cart. Price: PKR " + price);
        }
    </script>
</body>

</html>
