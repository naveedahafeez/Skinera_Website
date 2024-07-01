<?php
$server = "localhost";
$user = "root";
$pass = "";
$db_name = "skinera";

$con = mysqli_connect($server, $user, $pass, $db_name);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
