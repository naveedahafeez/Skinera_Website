<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cosmetics Collection</title>
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
            width: calc(25% - 40px); /* 25% width with margin */
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
            background-color: #333;
        }
        .HEADING{
            text-align: center;
            text-size-adjust: 90px;
        }
    </style>
</head>

<body>
<?php include 'header.php'; ?>
<section>
<div class="HEADING"> 
    <h> <b>COSMETICS COLLECTION </b></h>
</div>
    <div class="container">
        <div class="product">
            <img src="imgs/images-51.jpeg" alt="Product 1">
            <h3>serum</h3>
            <p>2000</p>
            <button>Add</button>
        </div>
      
        <div class="product">
            <img src="imgs/images-52.jpeg" alt="Product 2">
            <h3>pink lipstick</h3>
            <p>2500</p>
            <button>Add</button>
        </div>
        <div class="product">
            <img src="imgs/images-53.jpeg" alt="Product 3">
            <h3>fresh lipstick</h3>
            <p>3000</p>
            <button>Add</button>
        </div>
        <div class="product">
            <img src="imgs/images-54.jpeg" alt="Product 4">
            <h3>face kit</h3>
            <p>3500</p>
            <button>Add</button>
        </div>
    
    </div>
    <div class="container">
        <div class="product">
            <img src="imgs/images-55.jpeg" alt="Product 1">
            <h3>Pro creame</h3>
            <p>2000</p>
            <button>Add</button>
        </div>
       
        <div class="product">
            <img src="imgs/images-56.jpeg" alt="Product 2">
            <h3>serum clear</h3>
            <p>2500</p>
            <button>Add</button>
        </div>
        <div class="product">
            <img src="imgs/images-57.jpeg" alt="Product 3">
            <h3>blush on</h3>
            <p>3000</p>
            <button>Add</button>
        </div>
        <div class="product">
            <img src="imgs/images-58.jpeg" alt="Product 4">
            <h3>Red lipstick</h3>
            <p>3500</p>
            <button>Add</button>
        </div>
        
    </div>
    <div class="container">
        <div class="product">
            <img src="imgs/images-59.jpeg" alt="Product 1">
            <h3>face kit</h3>
            <p>2000</p>
            <button>Add</button>
        </div>
       
        <div class="product">
            <img src="imgs/images-60.jpeg" alt="Product 2">
            <h3>pack of four</h3>
            <p>2500</p>
            <button>Add</button>
        </div>
        <div class="product">
            <img src="imgs/images-61.jpeg" alt="Product 3">
            <h3>Red lipstick</h3>
            <p>3000</p>
            <button>Add</button>
        </div>
        <div class="product">
            <img src="imgs/images-62.jpeg" alt="Product 4">
            <h3>givency lipstick</h3>
            <p>3500</p>
            <button>Add</button>
        </div>
        
    </div>


</section>

    <?php include 'footer.php'; ?>
</body>

</html>
