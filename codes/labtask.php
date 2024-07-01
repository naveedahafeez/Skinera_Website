<?php 
require('connection.php');

$q = "SELECT id, username, email ,picture FROM users order by id "; 
$res = mysqli_query($con, $q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>display data </title>
  <link rel="stylesheet" href="mystyle.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/jquery.js"></script>
</head>
<body>
    <table class="table table_border">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Pictures</th>
        </tr>
        <?php  
        if(mysqli_num_rows($res) > 0) { 
            while($arr = mysqli_fetch_assoc($res)) {
        ?>
        <tr> 
            <td><?php echo $arr["id"]; ?></td>
            <td><?php echo $arr["username"]; ?></td>
            <td><?php echo $arr["email"]; ?></td>
            <td><img src="imgs/<?php echo $arr['picture']; ?>" style="height: 80px;"></td>
        </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='3'>No records found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
