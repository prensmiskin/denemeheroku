<?php 

$servername = "ql7.freemysqlhosting.net";
$username = "sql7302807";
$password = "iB6QcldJ2N";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";








 ?>