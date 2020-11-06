<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'test';
$conn= mysqli_connect($server,$user,$password,$database);

$email = $_POST['email'];
$str = "INSERT INTO email(email) 
    VALUES('$email')";

$query= mysqli_query($conn,$str);

// header("location:/age_scanner/index.html");

?>