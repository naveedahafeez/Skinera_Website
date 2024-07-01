<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.bundle.js"></script>
<script src="js/jquery.js"></script>
<title>Sign Up</title>
<style>
  body {
    background:url(imgs/loginbb.png);
    background-size: cover;
    padding-top: 380px;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
  }
  .container {
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
  }
  input[type="text"], input[type="email"], input[type="password"], input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  input[type="submit"] {
    background-color: #080808;
    color: #fff;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #0b0c2b;
  }
  label {
    font-weight: bold;
  }
</style>
</head>
<body>

<div class="container">
  <h2>Sign Up</h2>
  <form action="" method="POST" onsubmit="return validateForm()">
    <label for="username">Username</label>
    <input type="text" id="username" name="username" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>

    <label for="confirmPassword">Confirm Password</label>
    <input type="password" id="confirmPassword" name="confirmPassword" required>

    <input type="submit" value="Sign Up">
    
  </form>
  <p style="text-align: center;">Already have an account? <a href="login.php">Login here</a>.</p>
</div>

<script>
  function validateForm() {
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;
    
    if (password !== confirmPassword) {
      alert("Passwords do not match!");
      return false;
    }
    return true;
  }
</script>

</body>
</html>

<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
        $uname = mysqli_real_escape_string($con, $_POST['username']);
        $uemail = mysqli_real_escape_string($con, $_POST['email']);
        $pass = mysqli_real_escape_string($con, $_POST['password']); 

        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

        $q = "INSERT INTO users (username, email, password) VALUES ('$uname', '$uemail', '$hashed_pass')";
        $r = mysqli_query($con, $q);

        if ($r) {
            echo "User registered successfully.";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}
?>
