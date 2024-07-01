<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - SkinEra</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            text-align: center;
            background-color: #f8f9fa;
        }
        header, footer {
            flex-shrink: 0;
        }
        .card {
            padding: 30px;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            width: 100%;
            max-width: 600px;
        }
        .card h2 {
            font-size: 2em;
            color: #333;
            margin-bottom: 20px;
        }
        .card input[type="text"], .card input[type="email"], .card input[type="number"], .card select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid black;
            border-radius: 5px;
            font-size: 1em;
        }
        .card button {
            padding: 15px 30px;
            background-color: black;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 20px;
        }
        .card button:hover {
            background-color: #ff6347;
        }
        .total-price {
            font-size: 1.5em;
            font-weight: bold;
            margin-top: 20px;
            color: #333;
        }
        .card label {
            text-align: left;
            width: 100%;
            font-size: 1em;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <section class="main-content">
        <div class="card">
            <h2 class="mb-4">Checkout</h2>
            <form action="process_checkout.php" method="post" onsubmit="return handleSubmit()">
                <input type="hidden" name="cart" id="cart">
                <input type="hidden" name="total" id="total">
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" required>
                </div>
                <div>
                    <label for="city">City</label>
                    <input type="text" name="city" id="city" required>
                </div>
                <div>
                    <label for="zip">Zip Code</label>
                    <input type="number" name="zip" id="zip" required>
                </div>
                <div>
                    <label for="country">Country</label>
                    <input type="text" name="country" id="country" required>
                </div>
                <div>
                    <label for="paymentMethod">Payment Method</label>
                    <select name="paymentMethod" id="paymentMethod" required>
                        <option value="Credit Card">Credit Card</option>
                        <option value="Debit Card">Debit Card</option>
                        <option value="Cash on Delivery">Cash on Delivery</option>
                    </select>
                </div>
                <div class="total-price" id="total-price">Total: PKR 0</div>
                <button type="submit">Place Order</button>
            </form>
        </div>
    </section>
    <?php include 'footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            document.getElementById('cart').value = JSON.stringify(cart);
            document.getElementById('total').value = total;
            document.getElementById('total-price').textContent = `Total: PKR ${total}`;
        });

        function handleSubmit() {
            alert("Form is being submitted.");
            return true;
        }
    </script>
</body>
</html>

