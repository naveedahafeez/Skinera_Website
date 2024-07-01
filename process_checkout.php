<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "skineradb"; 


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $zip = htmlspecialchars($_POST['zip']);
    $country = htmlspecialchars($_POST['country']);
    $paymentMethod = htmlspecialchars($_POST['paymentMethod']);

    $cart = json_decode($_POST['cart'], true);
    $total = htmlspecialchars($_POST['total']);

    $stmt = $conn->prepare("INSERT INTO customers (name, email, address, city, zip, country) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $address, $city, $zip, $country);
    $stmt->execute();
    $customer_id = $stmt->insert_id;
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO orders (customer_id, total, payment_method) VALUES (?, ?, ?)");
    $stmt->bind_param("ids", $customer_id, $total, $paymentMethod);
    $stmt->execute();
    $order_id = $stmt->insert_id;
    $stmt->close();

    
    $stmt = $conn->prepare("INSERT INTO order_items (order_id, product_name, quantity, price) VALUES (?, ?, ?, ?)");
    foreach ($cart as $item) {
        $product_name = $item['name'];
        $quantity = $item['quantity'];
        $price = $item['price'];
        $stmt->bind_param("isid", $order_id, $product_name, $quantity, $price);
        $stmt->execute();
    }
    $stmt->close();

    $conn->close();

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Order Confirmation</title>
        <link rel='stylesheet' href='css/bootstrap.min.css'>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f8f9fa;
                color: #333;
                text-align: center;
                padding: 50px;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                background: #fff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h1 {
                color: black;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>Order Confirmed</h1>
            <p>Thank you for your order, $name!</p>
            <p>An email confirmation has been sent to $email.</p>
            <h3>Order Summary</h3>
            <ul>";
            foreach ($cart as $item) {
                echo "<li>{$item['name']} ({$item['quantity']}) - PKR {$item['price']} each</li>";
            }
            echo "</ul>
            <p>Total: PKR $total</p>
            <p>We will ship your order to:</p>
            <p>$address, $city, $zip, $country</p>
        </div>
    </body>
    </html>";
}
?>
