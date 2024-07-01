<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "skineradb"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$customers_sql = "SELECT * FROM customers";
$customers_result = $conn->query($customers_sql);


$orders_sql = "SELECT * FROM orders";
$orders_result = $conn->query($orders_sql);


$order_items_sql = "SELECT * FROM order_items";
$order_items_result = $conn->query($order_items_sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - SkinEra</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            margin: 20px auto;
            padding: 20px;
            max-width: 1200px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Admin Dashboard</h2>
        
        <h3>Customers</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Zip Code</th>
                <th>Country</th>
                <th>Created At</th>
            </tr>
            <?php if ($customers_result->num_rows > 0) {
                while($row = $customers_result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['city']; ?></td>
                        <td><?php echo $row['zip']; ?></td>
                        <td><?php echo $row['country']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                    </tr>
                <?php }
            } else {
                echo "<tr><td colspan='8'>No customers found</td></tr>";
            } ?>
        </table>

        <h3>Orders</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Customer ID</th>
                <th>Total</th>
                <th>Payment Method</th>
                <th>Created At</th>
            </tr>
            <?php if ($orders_result->num_rows > 0) {
                while($row = $orders_result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['customer_id']; ?></td>
                        <td><?php echo $row['total']; ?></td>
                        <td><?php echo $row['payment_method']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                    </tr>
                <?php }
            } else {
                echo "<tr><td colspan='5'>No orders found</td></tr>";
            } ?>
        </table>

        <h3>Order Items</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Order ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Created At</th>
            </tr>
            <?php if ($order_items_result->num_rows > 0) {
                while($row = $order_items_result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['order_id']; ?></td>
                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                    </tr>
                <?php }
            } else {
                echo "<tr><td colspan='6'>No order items found</td></tr>";
            } ?>
        </table>
    </div>
</body>
</html>
<?php
$conn->close();
?>
