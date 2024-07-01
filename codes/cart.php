<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="body.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .cart-header h2 {
            margin: 0;
        }

        .cart-items {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item img {
            width: 100px;
            height: auto;
            border-radius: 5px;
        }

        .cart-item-details {
            flex: 1;
            padding-left: 20px;
        }

        .cart-item-details h4 {
            margin: 0 0 5px 0;
        }

        .cart-item-details p {
            margin: 0;
        }

        .cart-item-price {
            font-weight: bold;
            font-size: 18px;
        }

        .cart-item-remove {
            color: #ff0000;
            cursor: pointer;
        }

        .cart-total {
            text-align: right;
            margin-top: 20px;
        }

        .cart-total h3 {
            margin: 0;
        }

        .btn-checkout {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .btn-checkout:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <div class="cart-header">
            <h2>Shopping Cart</h2>
            <img src="imgs/finallogo.png" alt="Brand Logo" width="150">
        </div>
        <div class="cart-items">

        </div>
        <div class="cart-total">
            <h3>Total: PKR 0</h3>
            <a href="checkout.php" class="btn-checkout">Proceed to Checkout</a>
        </div>
    </div>
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
            updateCartUI();
        }

        function removeFromCart(element) {
            let cartItem = element.closest('.cart-item');
            let productName = cartItem.querySelector('h4').textContent;
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart = cart.filter(item => item.name !== productName);
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartUI();
        }

        function updateCartUI() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let cartItemsContainer = document.querySelector('.cart-items');
            let cartTotalContainer = document.querySelector('.cart-total h3');
            cartItemsContainer.innerHTML = '';
            let total = 0;
            cart.forEach(item => {
                total += item.price * item.quantity;
                cartItemsContainer.innerHTML += `
                    <div class="cart-item">
                        <img src="imgs/${item.name.replace(/ /g, '-').toLowerCase()}.jpeg" alt="Product Image">
                        <div class="cart-item-details">
                            <h4>${item.name}</h4>
                            <p>Quantity: ${item.quantity}</p>
                        </div>
                        <div class="cart-item-price">PKR ${item.price * item.quantity}</div>
                        <div class="cart-item-remove" onclick="removeFromCart(this)">Remove</div>
                    </div>
                `;
            });
            cartTotalContainer.textContent = `Total: PKR ${total}`;
        }

        window.onload = updateCartUI;
    </script>
</body>

</html>
