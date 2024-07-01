<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
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
    <h2>Admin Login</h2>
    <form id="adminLoginForm">
      <div class="form-group">
        <label for="admin_name">Name:</label>
        <input type="text" id="admin_name" name="admin_name" required>
      </div>
      <div class="form-group">
        <label for="admin_password">Password:</label>
        <input type="password" id="admin_password" name="admin_password" required>
      </div>
      <button type="button" onclick="login()">Login</button>
    </form>
  </div>

  <script>
    function login() {
      var adminName = document.getElementById("admin_name").value;
      var adminPassword = document.getElementById("admin_password").value;

      if (adminName === "naveeda" && adminPassword === "123") {
        
        window.location.href = "admin_dashboard.php";
      } else {
        alert("Invalid credentials. Please try again.");
      }
    }
  </script>
</body>
</html>
