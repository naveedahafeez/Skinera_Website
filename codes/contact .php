<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SkinEra</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .contact-container {
            max-width: 600px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .contact-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .contact-container p {
            margin-bottom: 10px;
            color: #555;
        }
        .contact-container .form-group {
            margin-bottom: 15px;
        }
        .contact-container .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .contact-container .form-group input,
        .contact-container .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .contact-container .form-group button {
            width: 100%;
            padding: 10px;
            background-color:black;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
        }
        .contact-container .form-group button:hover {
            background-color: black;
        }
        header, footer {
            flex-shrink: 0;
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.js"></script>
</head>
<body>

<?php include 'header.php'; ?>

<section class="main-content">
    <div class="contact-container">
        <h2>Contact Us</h2>
        <p>If you have any questions or would like more information about our products, please feel free to contact us.</p>
        <form>
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Enter your message"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Send Message</button>
            </div>
        </form>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>
