<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About SkinEra</title>
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
            text-align: center;
            padding: 20px;
        }
        header, footer {
            flex-shrink: 0;
        }
    </style>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.js"></script>
</head>
<body>

<?php include 'header.php'; ?>

<section class="main-content">
    <div class="about-container">
        <h2>About SkinEra</h2>
        <p>SkinEra is dedicated to providing high-quality skincare products that help you achieve healthy, radiant skin.</p>
        <p>Our mission is to harness the power of nature and science to develop effective solutions for all skin types and concerns.</p>
        <p>At SkinEra, we believe in transparency and integrity. That's why all our products are formulated with carefully selected ingredients, backed by scientific research, and free from harmful chemicals.</p>
        <p>Whether you're looking to address specific skin issues or maintain your skin's youthful glow, SkinEra has you covered.</p>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>
