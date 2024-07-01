<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: skyblue;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }
        h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: black;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: blue;
        }
        .form-errors {
            color: red;
            margin-bottom: 20px;
        }
        .form-errors p {
            margin: 0;
        }
        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $server = "localhost";
        $user = "root";
        $pass = "";
        $db_name = "your_database";
        
        $con = mysqli_connect($server, $user, $pass, $db_name);
        
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $name = $email = $subject = $message = "";
        $nameErr = $emailErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            $subject = test_input($_POST["subject"]);
            $message = test_input($_POST["message"]);

            if (empty($nameErr) && empty($emailErr)) {
                $stmt = $con->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $name, $email, $subject, $message);
                if ($stmt->execute()) {
                    echo "<p>Thank you for contacting us!</p>";
                } else {
                    echo "<p>There was an error processing your request. Please try again later.</p>";
                }
                $stmt->close();
            } else {
                echo '<div class="form-errors">';
                if (!empty($nameErr)) echo "<p>$nameErr</p>";
                if (!empty($emailErr)) echo "<p>$emailErr</p>";
                echo '</div>';
            }
        }

        $con->close();

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <form id="contactForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h2>Contact Us</h2>
            <div id="formErrors" class="form-errors"></div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            var form = event.target;
            var valid = true;
            var errors = [];

            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var subject = document.getElementById('subject').value;
            var message = document.getElementById('message').value;

            if (name.trim() === '') {
                valid = false;
                errors.push('Name is required.');
            }

            if (email.trim() === '' || !validateEmail(email)) {
                valid = false;
                errors.push('Valid email is required.');
            }

            if (subject.trim() === '') {
                valid = false;
                errors.push('Subject is required.');
            }

            if (message.trim() === '') {
                valid = false;
                errors.push('Message is required.');
            }

            if (!valid) {
                event.preventDefault();
                displayErrors(errors);
            }
        });

        function validateEmail(email) {
            var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function displayErrors(errors) {
            var errorDiv = document.getElementById('formErrors');
            errorDiv.innerHTML = '';
            errors.forEach(function(error) {
                var errorItem = document.createElement('p');
                errorItem.textContent = error;
                errorDiv.appendChild(errorItem);
            });
        }
    </script>
</body>
</html>
