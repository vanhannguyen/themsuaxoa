<?php 
   require_once "connect.php";

$email = $_POST['email'];
$username = $_POST['username'];
$address = $_POST['address'];

$sql = "INSERT INTO hocsinh(username, email, address)
        VALUES('$username','$email','$address');";

mysqli_query($con, $sql);
header('location: ./index.php');

