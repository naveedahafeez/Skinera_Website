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
        }
        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            text-align: center;
        }
        header, footer {
            flex-shrink: 0;
        }
        .card {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <section class="main-content">
        <div class="card">
            <h2 class="mb-4">Checkout</h2>
            <h3>Product: <?php echo htmlspecialchars($_GET['product']); ?></h3>
            <p>Price: Rs. <?php echo htmlspecialchars($_GET['price']); ?></p>
        </div>
    </section>
    <?php include 'footer.php'; ?>
</body>

</html>

</html>
