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
            padding: 50px;
        }
        header, footer {
            flex-shrink: 0;
        }
        .about-container {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }
        .founder-section, .values-section, .history-section, .testimonials-section {
            margin: 50px 0;
        }
        .founder-image, .values-image, .history-image, .testimonial-image {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
        }
        .testimonials-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .testimonial {
            max-width: 45%;
            text-align: left;
            margin-bottom: 30px;
        }
        .testimonial img {
            width: 100%;
            height: auto;
            border-radius: 10px;
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

        <div class="founder-section">
            <h3>Meet Our Founder</h3>
            <img src="imgs/profile.jpeg" alt="Founder Name" class="founder-image">
            <p><strong>Naveeda Hafeez</strong></p>
            <p>Our founder, Naveeda Hafeez, started SkinEra with a passion for skincare and a vision to create products that are both effective and safe. With a background in dermatology and years of research, she brings a wealth of knowledge and expertise to the brand.</p>
        </div>

        <div class="history-section">
            <h3>Our History</h3>
            <img src="imgs/108.jpeg" alt="History" class="history-image">
            <p>SkinEra was founded in [Year] with a mission to revolutionize the skincare industry. Over the years, we have grown from a small startup to a trusted brand, known for our innovative products and dedication to customer satisfaction.</p>
        </div>

        <div class="testimonials-section">
            <h3>What Our Customers Say</h3>
            <div class="testimonials-container">
                <div class="testimonial">
                    <img src="imgs/fb1.png" alt="Testimonial 1" class="testimonial-image">
                    <blockquote>
                        <p>"SkinEra products have transformed my skin! I love how gentle yet effective they are."</p>
                        <footer>- Happy Customer</footer>
                    </blockquote>
                </div>
                <div class="testimonial">
                    <img src="imgs/fb.jpeg" alt="Testimonial 2" class="testimonial-image">
                    <blockquote>
                        <p>"I appreciate the transparency and the natural ingredients used. My skin has never felt better!"</p>
                        <footer>- Satisfied Client</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>
