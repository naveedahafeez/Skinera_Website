<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmetics Collection</title>
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

        .navbar-containor {
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
            width: calc(25% - 40px);
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
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <section>
        <div class="HEADING">
            <h1>COSMETICS COLLECTION</h1>
        </div>
        <div class="container">
            <div class="product">
                <img src="imgs/images-51.jpeg" alt="serum">
                <h3>serum</h3>
                <p>PKR 2000</p>
                <button onclick="addToCart('serum', 2000)">Add to Cart</button>
            </div>
            <div
            class="product">
                <img src="imgs/images-52.jpeg" alt="pink lipstick">
                <h3>pink lipstick</h3>
                <p>PKR 2500</p>
                <button onclick="addToCart('pink lipstick', 2500)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-53.jpeg" alt="fresh lipstick">
                <h3>fresh lipstick</h3>
                <p>PKR 3000</p>
                <button onclick="addToCart('fresh lipstick', 3000)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-54.jpeg" alt="face kit">
                <h3>face kit</h3>
                <p>PKR 3500</p>
                <button onclick="addToCart('face kit', 3500)">Add to Cart</button>
            </div>
        </div>
        <div class="container">
            <div class="product">
                <img src="imgs/images-55.jpeg" alt="Pro cream">
                <h3>Pro cream</h3>
                <p>PKR 2000</p>
                <button onclick="addToCart('Pro cream', 2000)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-56.jpeg" alt="serum clear">
                <h3>serum clear</h3>
                <p>PKR 2500</p>
                <button onclick="addToCart('serum clear', 2500)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-57.jpeg" alt="blush on">
                <h3>blush on</h3>
                <p>PKR 3000</p>
                <button onclick="addToCart('blush on', 3000)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-58.jpeg" alt="Red lipstick">
                <h3>Red lipstick</h3>
                <p>PKR 3500</p>
                <button onclick="addToCart('Red lipstick', 3500)">Add to Cart</button>
            </div>
        </div>
        <div class="container">
            <div class="product">
                <img src="imgs/images-59.jpeg" alt="face kit">
                <h3>face kit</h3>
                <p>PKR 2000</p>
                <button onclick="addToCart('face kit', 2000)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-60.jpeg" alt="pack of four">
                <h3>pack of four</h3>
                <p>PKR 2500</p>
                <button onclick="addToCart('pack of four', 2500)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-61.jpeg" alt="Red lipstick">
                <h3>Red lipstick</h3>
                <p>PKR 3000</p>
                <button onclick="addToCart('Red lipstick', 3000)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-62.jpeg" alt="Givenchy lipstick">
                <h3>Givenchy lipstick</h3>
                <p>PKR 3500</p>
                <button onclick="addToCart('Givenchy lipstick', 3500)">Add to Cart</button>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
        function addToCart(name, price) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let itemIndex = cart.findIndex(item => item.name === name);
            if (itemIndex > -1) {
                cart[itemIndex].quantity++;
            } else {
                cart.push({ name: name, price: price, quantity: 1 });
            }
            localStorage.setItem('cart', JSON.stringify(cart));
            alert(name + ' added to cart!');
        }

        function proceedToCheckout() {
            window.location.href = 'checkout.php';
        }
    </script>
</body>
</html>
