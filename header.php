<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        header {
            background: #ffffff;
            display: flex;
            justify-content: space-between;
            background-color: black;
            align-items: center;
            padding: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 3em;
            padding-left: 20px;
            color: #ffffff;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }

        nav ul li {
            margin: 0 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #ffffff;
            margin-right: 30px;
        }

        .cart-icon {
            margin-right: 40px;
        }
    </style>
</head>
<body>
<header class="head">
    <h1>SkinEra</h1>
    <nav>
        <ul>
            <li><a href="landingpage.php">Home</a></li>
            <li><a href="main.php">Shop</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact%20.php">Contact</a></li>
            <li>
                <a href="cart.php">
                    <img src="imgs/carts.png" alt="Cart" class="cart-icon" width="30" height="30">
                </a>
            </li>
        </ul>
    </nav>
</header>
</body>
</html>
