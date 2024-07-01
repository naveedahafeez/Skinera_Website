<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women's Collection</title>
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

        .product button:hover  {
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
            <h1>WOMEN'S COLLECTION</h1>
        </div>
        <div class="container">
            <div class="product">
                <img src="imgs/images-30.jpeg" alt="lipbalm">
                <h3>lipbalm</h3>
                <p>PKR 2000</p>
                <button onclick="addToCart('lipbalm', 2000)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-32.jpeg" alt="skin kit">
                <h3>skin kit</h3>
                <p>PKR 2500</p>
                <button onclick="addToCart('skin kit', 2500)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-33.jpeg" alt="fresh kit">
                <h3>fresh kit</h3>
                <p>PKR 3000</p>
                <button onclick="addToCart('fresh kit', 3000)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-34.jpeg" alt="whole kit">
                <h3>whole kit</h3>
                <p>PKR 3500</p>
                <button onclick="addToCart('whole kit', 3500)">Add to Cart</button>
            </div>
        </div>
        <div class="container">
            <div class="product">
                <img src="imgs/images-35.jpeg" alt="Pro kit">
                <h3>Pro kit</h3>
                <p>PKR 2000</p>
                <button onclick="addToCart('Pro kit', 2000)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-36.jpeg" alt="oxea clear">
                <h3>oxea clear</h3>
                <p>PKR 2500</p>
                <button onclick="addToCart('oxea clear', 2500)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-37.jpeg" alt="hair mask">
                <h3>hair mask</h3>
                <p>PKR 3000</p>
                <button onclick="addToCart('hair mask', 3000)">Add to Cart</button>
            </div>
            <div class="product">
                <img src="imgs/images-38.jpeg" alt="Protein mask">
                <h3>Protein mask</h3>
                <p>PKR 3500</p>
                <button onclick="addToCart('Protein mask', 3500)">Add to Cart</button>
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
