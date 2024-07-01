<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkINEra</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/jquery.js"></script>
  
  <style>
    body {
    background-image: url(imgs/loginbb.png);
    background-size: cover;
    padding-top: 5%;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
  }
  .login-container {
    max-width: 500px;
    margin: 100px auto;
    padding: 50px;
    height: max-content;
    background-color: whitesmoke;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
    
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #040405;
      color: #fff;
      cursor: pointer;
    }

    button:hover {
      background-color: #03041d;
    }

    p {
      text-align: center;
    }

    a {
      color: #405785;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="post" onsubmit="return validateForm()">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" value="login">Login</button>
    </form>
    <p>Don't have an account? <a href="signup.php">Sign up here</a>.</p>
    <p>Admin? <a href="admin_login.php">Login here</a>.</p>
  </div>
</body>
</html>

<?php
require('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username'], $_POST['password'])) {
        $uname = mysqli_real_escape_string($con, $_POST['username']);
        $pass = mysqli_real_escape_string($con, $_POST['password']);

        $query = "SELECT * FROM users WHERE username='$uname'";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            $db_pass = $user['password']; 

            if (password_verify($pass, $db_pass)) {
                echo "Login successful!";
                session_start();
                $_SESSION['username'] = $uname;
                header("Location: landingpage.php");
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "Invalid username.";
        }
    }
}
?>
